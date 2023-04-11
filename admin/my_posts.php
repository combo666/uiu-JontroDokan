<?php include "includes/header_html.php"; ?>

<?php include "includes/topbar.php"; ?>

<div id="layoutSidenav">

    <?php include "includes/sidebar.php"; ?>
    <?php include "../database/db_connect.php"; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">All posts</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active">All posts</li>
                </ol>
            </div>
        </main> 
        <a href="my_posts.php?source=add_new" class="btn btn-primary btn-sm col-md-1 ms-auto mb-2 me-2">Add New</a>
    
        
<?php
if (isset($_GET['source'])) {
    $source = $_GET['source'];
} else {
    $source = '';
}
switch ($source) {
    case "add_new":
        include "add_new_post.php";
        break;
    case "200":
        echo "100";
        break;
    default:
        include "includes/view_all_posts.php";
        break;
}



?>
<?php include "includes/footer.php" ?>