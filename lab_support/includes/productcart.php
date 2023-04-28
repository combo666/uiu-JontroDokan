
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
                    while($row = mysqli_fetch_array($result)){ 
                        $item_id = $row['item_id'];
                        $item_name = $row['item_name'];
                        $available_units = $row['available_units'];
                        $item_image = $row['item_image'];
                        $item_tag = $row['tag'];
                        $item_details = $row['item_details'];
                        
                        ?>
                        <div class="col-lg-5">
                            <div class="card mb-3">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <img src="image/<?php echo $item_image; ?>" alt="no_image">
                                        <h2 class="product_name">
                                            <h2 class="card-title h4"><a href="lab_post.php?i_id=<?php echo $item_id; ?>"><?php echo mb_strimwidth($item_name, 0, 30, "..."); ?></a></h2>
                                                <br>
                                            <h7>Available Units : <?= $available_units?></h7>
                                        </h2>
                                        <div class="btn d-flex justify-content-between align-items-center">
                                            <?php 
                                            if($uname){
                                                ?>
                                                <a href="./user_add_lab_item.php?i_id=<?php echo $item_id; ?>" class="add-to-cart-btn">
                                                    <i class=""></i> Add
                                                </a>
                                                <?php
                                            }else{
                                                ?>
                                                <a href="../customers/login.php" class="add-to-cart-btn">
                                                    <i class=""></i> Add
                                                </a>
                                                <?php
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </section>


        </div>
    </div>
</section>