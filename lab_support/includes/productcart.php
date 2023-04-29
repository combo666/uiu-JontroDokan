
<section>
        
        <div class="row">
        <?php
        $query = "SELECT * FROM `lab_items`";
        $result = mysqli_query($connect , $query);
        ?>
                <?php
                    while($row = mysqli_fetch_array($result)){ 
                        $item_id = $row['item_id'];
                        $item_name = $row['item_name'];
                        $available_units = $row['available_units'];
                        $item_image = $row['item_image'];
                        $item_tag = $row['tag'];
                        $item_details = $row['item_details'];
                        
                        ?>
                        <div class="col-md-6 d-flex align-items-stretch">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="post.php?p_id=<?php echo $post_id; ?>"><img class="card-img-top" src="image/<?php echo $post_image ?>" alt="no image"/></a>
                            <div class="card-body">

                                <h2 class="card-title h4"><a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo mb_strimwidth($post_title, 0, 30, "..."); ?></a></h2>
                                <div class="small text-muted">By: <?php echo $post_author ?>, </div>
                                <span class="small text-muted">published on: <?php echo $post_date ?></span>
                                <p class="card-text"><?php echo mb_strimwidth($post_content, 0, 200, "..."); ?></p>
                                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read more →</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>


        </div>
</section>