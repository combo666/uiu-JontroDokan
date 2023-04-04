<?php include "../homepage/includes/header_html.php" ?>
<?php include "../homepage/includes/header_body.php" ?>




<?php
    if(isset($_POST['submit-btn'])){
        include "./form.php";
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                
                <div class="card-body container">
                    <h2>Recently Added</h2>
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


<div class="button-container">
    <form action="form.php" method="post">
        <input type="submit" name="submit-btn"class="recycle-here" value="♻️Recycle Here">
    </form>
</div>



<?php include "../homepage/includes/footer.php" ?>