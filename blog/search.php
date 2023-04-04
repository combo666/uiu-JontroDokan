<?php
include('../database/db_connect.php');

if(isset($_POST['submit']))
{
    $search = $_POST['search'];
    $query = "select * from posts where post_tags like '%$search%' ";

    $search_query = mysqli_query($connect, $query);

    if(!$search_query)
    {
        die("Query failed" . mysqli_error($connect));
    }

    $count = mysqli_num_rows($search_query);
    
}
?>
<?php include('includes/header.php') ?>
<?php include('../homepage/includes/header_body.php')?>
        <!-- Page header with logo and tagline-->
        <header class="py-2 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Search Results</h1>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">



<!-- queries to read posts from db  -->
<?php

    if($count == 0)
    {
        echo "<h1> No Search Results Were found!</h1>";
    }

    while($row = mysqli_fetch_assoc($search_query))
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

