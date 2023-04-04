<?php include "../homepage/includes/header_html.php" ?>
<?php include "../homepage/includes/header_body.php" ?>




<?php
    if(isset($_POST['submit-btn'])){
        include "./form.php";
    }
?>

<style>
    .dropdown{
        margin-left: auto !important;

    }
</style>

<div class="container">
    <div class="row mt-5">
        <div class="col-sm-8">
            <div class="card mb-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </button>
                    <div name="dropdownMenu2" class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                
                <div class="card-body container">
                    <h2>Featured Products</h2>
                    <?php include "../recycle/includes/recentcard.php" ?>
                    
                </div>
            </div>
        </div>
            <?php include "includes/sidebar.php" ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-13">
                    <div class="card mb-4">
                        <div class="card-body container">
                            <h2>Available Products</h2>
                            <?php include "../recycle/includes/productcard.php" ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include "../homepage/includes/footer.php" ?>