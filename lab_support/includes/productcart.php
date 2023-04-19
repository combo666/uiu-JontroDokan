
<section class="latest-product">
    <div class="container">
        
        <div class="row container">
        <?php
                $query = "SELECT * FROM `lab_items`";
                $result = mysqli_query($connect , $query);
                ?>
                <section class="latest-product">
                        <div class="container">
                            <div class="row container">
                <?php
                while($row = mysqli_fetch_array($result)){ ?>
                    
                    
                    
                                <div class="col-lg-5">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center">
                                            <img src="../assets/images/product/f3.png" alt="">
                                            <h2 class="product_name">
                                                <a class="text-decoration-none" href=""><?= $row['item_name'] ?></a>
                                                <br>
                                                <?php $queryi="SELECT COUNT(*) AS num FROM `lab_items` WHERE item_name = 'Arduino'";
                                                    $resulti = mysqli_fetch_array(mysqli_query($connect , $queryi));
                                                    $resulti['num'];?>
                                            <h7>Available Units : <?= $resulti['num']?></h7>
                                            </h2>
                                            <div class="btn d-flex justify-content-between align-items-center">
                                                <a href="" class="add-to-cart-btn">
                                                    <i class=""></i> Add
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                <?php }
        ?>
                        </div>
                    </div>
                </section>


        </div>
    </div>
</section>