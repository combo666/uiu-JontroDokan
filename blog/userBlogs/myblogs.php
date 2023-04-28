<?php include('../includes/header_html.php') ?>
<?php include('../includes/header_body.php') ?>
<?php include('../../database/db_connect.php') ?>
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">My Blogs</h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <?php
            $userName = $_SESSION['uname'];
            $find_f_q = "select * from posts where post_author = '{$userName}'";
            $f_posts = mysqli_query($connect, $find_f_q);

            while ($row = mysqli_fetch_assoc($f_posts)) {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_date = $row['post_date'];
                $post_author = $row['post_author'];
                $post_content = $row['post_content'];
                $post_image = $row['post_image'];

            ?>
                <div class="card mb-4">
                    <a href="post.php?p_id=<?php echo $post_id; ?>"><img class="card-img-top" src="../image/<?php echo $post_image; ?>" alt="no_image" /></a>
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


        <?php include "../includes/userSidebar.php" ?>

    </div>
</div>



<?php include('../includes/userfooter.php') ?>







