<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   // $p_ptype=$_POST['flexRadioDefault'];
   if(!empty($_POST["flexRadioDefault"])){
      foreach($_POST["flexRadioDefault"] as $value){
        if($value == "option1"){
          $p_ptype = "Negotiable";
        }else{
          $p_ptype = "Fixed price";
        }
      }
   }
   $p_description=$_POST['description'];
   $p_selectOp=$_POST['catgSelect'];
   $p_otherOp=$_POST['otherOption'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;
   $current_time= time();
   
   // Check if `$p_otherOp` is empty, if so use `$p_selectOp` as the category value
   if(empty($p_otherOp)){
      $category = $p_selectOp;
   }else{
      $category = $p_selectOp . ': ' . $p_otherOp;
   }
   
   $stmt = $conn->prepare("INSERT INTO `products` (name, price, image, price_type, Description, Time_stamp, Category) VALUES (?, ?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("sssssis", $p_name, $p_price, $p_image, $p_ptype, $p_description, $current_time, $category);
   
   if($stmt->execute()){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product added successfully';
   }else{
      $message[] = 'could not add the product';
   }
};  

// delete
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:admin.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
<!--include header file -->
<?php include "../homepage/includes/header_html.php"; ?>
<?php include "../homepage/includes/header_body.php"; ?>

<div class="container">

<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new product</h3>
   <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
   <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
   <div class="mb-3">
   <textarea class="form-control" name="description" placeholder="Write product details" id="exampleFormControlTextarea1" rows="3"></textarea>
   </div>
   <div class="row">
      <div class="col">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault[]" id="flexRadioDefault1" value="option1">
            <label class="form-check-label" for="flexRadioDefault1">
              Negotiable
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault[]" id="flexRadioDefault2" value="option2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
               fixed price
            </label>
            </div>
      </div>
      <div class="col">
      <select class="form-select" aria-label="Default select example" name="catgSelect" onchange="checkOtherOption(this)">
         <option selected>Micro processor/Micro controler</option>
         <option value="1">Sensor</option>
         <option value="2">Motor</option>
         <option value="3">other</option>
      </select>
      <input type="text" id="otherOption" name="otherOption" style="display:none;" />
      </div>
      <script>
         function checkOtherOption(selectObject) {
         var otherOption = document.getElementById("otherOption");
         if (selectObject.value == "3") {
            otherOption.style.display = "inline-block";
         } else {
            otherOption.style.display = "none";
         }
         }
      </script>
   </div>

   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>Tk<?php echo $row['price']; ?>/-</td>
            <td>
               <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
               <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the prodcut" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn" onclick="window.location.href = 'admin.php';">
   </form>
   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>




<!-- custom js file link  -->
<script src="js/script.js"></script>
<?php include "../homepage/includes/footer.php"; ?>
</body>
</html>