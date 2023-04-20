<?php include "../homepage/includes/header_html.php" ?>
<?php include "../homepage/includes/header_body.php" ?>




<?php
if (isset($_POST['submit-btn'])) {
    include "./form.php";
}
?>

<style>
    .dropdown {
        margin-left: auto !important;

    }
</style>

<div class="container">
    <!-- <div class="row mt-5">
        <div class="col-sm-8">
            <div class="card mb-3">
                <div class="col-md-4 offset-md-8">
                <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                    <option selected>Sort by (Price)</option>
                    <option value="1">Price: Low >> High</option>
                    <option value="2">Price: HIgh >> Low</option>
                </select>
                </div>
            </div>
        </div>
    </div> -->
    <div style="padding-top: 10px;">
      <?php include "includes/sidebar.php" ?>
    </div>
    <div class="row" style="padding-left:26px; padding-right:26px; padding-bottom:10px">
            <div class="card md-4">
                <div class="card-body container">
                    <h2>Latest Products</h2>
                    <?php include "../Seller_page/products.php" ?>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-13">
                    <div class="card mb-4">
                        <div class="card-body container">
                            <h2>Available Products</h2>
                            <?php include "includes/productcards.php" ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include "../homepage/includes/footer.php" ?>