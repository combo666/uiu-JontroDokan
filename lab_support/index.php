<?php include "../homepage/includes/header_html.php" ?>
<?php include "../homepage/includes/header_body.php" ?>
<?php include "../database/db_connect.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="card mb-3">
                <div class="card-body container">
                    <h2>Lab Items</h2>
                    <?php include "includes/productcart.php" ?>
                    
                </div>
            </div>
        </div>
            <?php include "includes/sidebar.php" ?>
    </div>
</div>

<?php include "../homepage/includes/footer.php" ?>
