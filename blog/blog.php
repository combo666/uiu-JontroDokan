<?php include('includes/header.php') ?>
<?php include('../homepage/includes/header_body.php')?>
<?php include('../database/db_connect.php') ?>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to UIU Blog!</h1>
                    <p class="lead mb-0">A Busket of Blogs about project and ideas</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title">Featured Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>


                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">



<!-- queries to read posts from db  -->
<?php

    $query = "select * from posts";
    $select_all_posts_query = mysqli_query($connect, $query);

    while($row = mysqli_fetch_assoc($select_all_posts_query))
    {
        $post_title = $row['post_title'];
        $post_date = $row['post_date'];
        $post_author = $row['post_author'];
        $post_content = $row['post_content'];
?>


        <div class="col-md-6">
        <!-- Blog post-->
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
        
                <h2 class="card-title h4"><?php echo $post_title ?></h2>
                <div class="small text-muted">By: <?php echo $post_author ?>, </div>
                <span class="small text-muted">published on: <?php echo $post_date ?></span>
                <p class="card-text"><?php echo mb_strimwidth($post_content, 0, 200, "..."); ?></p>
                <a class="btn btn-primary" href="#!">Read more →</a>
            </div>
        </div>
    </div>

g
<?php
    }
?>
                    </div>
                </div>
                <!-- Side widgets-->


<?php include "includes/sidebar.php" ?>
                 
            </div>
        </div>
        <!-- Footer-->
<?php include('includes/footer.php') ?>
