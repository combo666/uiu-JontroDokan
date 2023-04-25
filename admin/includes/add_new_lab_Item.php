<?php

    
    if(isset($_POST['post_item']))
    {
        $item_name = $_POST['item_name'];
        $available_units = $_POST['available_units'];
        $tag = $_POST['tag'];
        $item_details = $_POST['item_details'];

        $pimage = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['name'];
        move_uploaded_file($post_image_temp, "../../lab_support/image/$pimage");


        $create_post_query = "INSERT INTO `lab_items`(`item_id`, `item_name`, `available_units`, `image`, `tag`, `item_details`) VALUES ('[value-1]','{$item_name}','{$available_units}','{$pimage}','{$tag}','{$item_details}')";


        $confirm_posted = mysqli_query($connect, $create_post_query);

        if($confirm_posted)
        {
          echo "<div class=\"alert alert-success\" role=\"alert\">
               post added!
              </div>";
        }
        else
        {
          die("<div class=\"alert alert-danger\" role=\"alert\">
          post is failed to add!
         </div>". mysqli_error($connect));
        }
    }
?>


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Add a new post
    </div>
    <div class="card-body">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input class="form-control" id="post_title" type="text" placeholder="Product name" name = "item_name" required/>
                <label for="post_title">Product Name</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="post_author" type="text" placeholder="Available Units" name="available_units" required/>
                <label for="post_author">Available Units</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="post_tags" type="text" placeholder="Post Tags" name="tag" required/>
                <label for="post_tags">Product Tags</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Write your contents here.." name="item_details" id="contents" style="height: 300px" required></textarea>
                <label for="contents">Details</label>
              </div>

              
              <!-- image and category  -->
              <div class="row g-2">
                <div class="col-md">
                    <div class="col-md mt-4">
                        <label for="formFile" class="form-label">Upload Item Image</label>
                        <input class="form-control" type="file" id="formFile" accept="image/png, image/gif, image/jpeg" name="image">
                    </div>
                </div>
                
                
                
              </div>
              <hr>
            <button class="btn btn-primary btn-xl mt-5" type="submit" name="post_item">ADD POST</button>
        </form>
    </div>
</div>
