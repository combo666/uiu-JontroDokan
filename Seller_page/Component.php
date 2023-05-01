<?php
include 'config.php';
?>

<?php include "../homepage/includes/header_html.php"; ?>
<?php include "../homepage/includes/header_body.php"; ?>
<!-- Component_details Show -->
<?php  
   if(isset($_GET['p_id'])) {
    $product_id = $_GET['p_id'];
    $sql = "SELECT * FROM `products` WHERE id=$product_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
      $select_products = mysqli_fetch_assoc($result);
      //category select
            $s_category=$select_products['Category'];
            // Calculate the time elapsed since the post was made
            $elapsed_time = time() - $select_products['Time_stamp'];
            $minutes_elapsed = round($elapsed_time / 60);

            // Calculate the hours elapsed
            $hours_elapsed = round($elapsed_time / 3600);

            // Calculate the days elapsed
            $days_elapsed = round($elapsed_time / 86400);
     ?>
     <header class="py-5 border-bottom mb-4 hero " style="margin-top: 100px!important;">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Details</h1>
        </div>
    </div>
</header>
<div class="row">
  <div class="col" style="padding-top: 50px;padding-left:50px;">
  <img style="height:150px;width:350px;" src="../Seller_page/uploaded_img/<?php echo $select_products['image']; ?>" alt="">
  <div style="padding-top: 100px;">
      <h3>Product Details</h3>
      <p><?php echo $select_products ['Description'];?></p>
    </div>
  </div>
  <div class="col" style="padding-left: 30px; margin:20px;">
      <h1><?php echo $select_products['name']; ?></h1>
      <h5 class="text-primary">
      <?php 
                if ($minutes_elapsed < 60) {
                    echo "Posted: ". $minutes_elapsed ." minutes ago";
                } else if ($hours_elapsed < 24) {
                    echo "Posted: ". $hours_elapsed . " hours ago";
                } else {
                    echo "Posted: ". $days_elapsed . " days ago";
                }
      ?>
      </h5>
      <div class="row">
        <div class="col">
        <h4>Price: <?php echo $select_products['price']. " "; ?> Tk</h4>
        <p class="fst-italic text-primary"><?php echo $select_products['price_type'];?></p>
        </div>
        <!-- <div class="col-2">
        </div> -->
      </div>
      <br>
      <div class="card md-4">
           <div class="card-header">Seller info</div>
                <div class="row">
                    <div class="col" style="padding-left:20px;">
                    <div class="form-check">
                       <h4>For sale by Name..</h4>
                    </div>
                    <div class="form-check">
                         <h5>Phone NO. 01753611721</h5>
                    </div>
                    <div class="form-check">
                       <h5>Eamil:sdey202074@bscse.uiu.ac.bd</h5>
                    </div>
                    <div class="form-check">
                        <h6>Other social media</h6>
                    </div>
                    </div>
                </div>
        </div>
  </div>
</div>
<?php
      }
    }
  ?>
<!-- show Similar catagory products -->
    <div class="row" style="padding-left:40px; padding-bottom:10px; width:96%">
            <div class="card md-4">
                <div class="card-body container">
                    <h2>Similar products </h2>
                    <section class="latest-product">
    <div class="container">
    <div class="row container">
    <?php     
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE Category='$s_category' AND id<>$product_id ORDER BY id DESC LIMIT 4");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>         
            <div class="col-lg-3" >
                <div class="card border-0 shadow-sm" style="width:270px;height:300px;">
                    <div class="card-body text-center" >
                      <img style="height:120px;width:170px;" src="../Seller_page/uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                         <h2 class="product_name">
                            <a class="text-decoration-none" href=""><?php echo $fetch_product['name']; ?></a>
                        </h2>
                        <h2>Tk <?php echo $fetch_product['price']; ?></h2>    
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href=".././Seller_page/Component.php?p_id=<?php echo $fetch_product['id']; ?>" class="add-to-cart-btn ">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
                <?php
         };
      };
      ?>
                 </div>
                </div>
            </div>
</section>
                </div>
            </div>
    </div>
<?php include "../homepage/includes/footer.php"; ?>