<?php include "../homepage/includes/header_html.php" ?>
<?php include "../homepage/includes/header_body.php" ?> 
<?php include('../database/db_connect.php') ?>

<header class="py-5 bg-light border-bottom mb-4">
    
</header>
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <?php
            $userID = $_SESSION['uid'];
            

            while ($row = mysqli_fetch_assoc($f_posts)) {
                $product_id = $row['p_id'];
                $product_name = $row['p_name'];
                $product_user_id = $row['user_id'];
                $p_image = $row['item_image'];
                $product_type = $row['p_type'];
                $product_details = $row['p_details'];

            ?>
                <div class="card mb-4">
                    <a href="post.php?p_id=<?php echo $product_id; ?>"><img class="card-img-top" src="../image/<?php echo $post_image; ?>" alt="no_image" /></a>
                    <div class="card-body">
                        <h2 class="card-title h4"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo mb_strimwidth($post_title, 0, 30, "..."); ?></a></h2>
                        <div class="small text-muted">By: <?php echo $post_author; ?>, </div>
                        <span class="small text-muted">published on: <?php echo $post_date; ?></span>
                        <p class="card-text"><?php echo mb_strimwidth($post_content, 0, 200, "..."); ?></p>
                        <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read more →</a>
                    </div>
                </div>

            <?php

            }

            ?>
        </div>
        <!-- Side widgets-->


        <?php include "../recycle/includes/user_sidebar.php" ?>

    </div>
</div>



<?php include "../homepage/includes/footer.php"?>