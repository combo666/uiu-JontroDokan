
<?php include "includes/header_html.php"; ?>

<?php include "includes/topbar.php"; ?>

<div id="layoutSidenav">

    <?php include "includes/sidebar.php"; ?>
    <?php include "../database/db_connect.php"; ?>

    <div id="layoutSidenav_content">
    <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Add Remove Products</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Laboratory Support</li>
                    <li class="breadcrumb-item active">Add remove products</li>
                </ol>
            </div>
        </main> 
        <a class="btn btn-primary btn-sm col-md-1 ms-auto mb-2 me-2" type="submit" name="add_new" href="labSupport.php?add_new">Add New</a>

        
        
        
<?php

        include "includes/view_lab_items.php";

        
        
?>

<div>
    <form action="#" >
      <?php
        if (isset($_GET['add_new'])) {
          include "../admin/includes/add_new_lab_Item.php";
        }
        
      ?>
  </form>
</div>

<?php include "includes/footer.php" ?>