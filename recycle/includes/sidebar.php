<div class="col-lg-3">

    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="search.php" method="post">
                <div class="input-group" style="display: flex;">
                <div class="row">
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="search" name="search" />
                    </div>
                    <div class="col-md-4" style="margin-top: 1px; margin-bottom: auto;">
                        <button class="btn btn-primary btn-block" id="button-search" type="submit" name="submit" >Go!</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="row">
                <?php
                $query = "select * from post_categories";

                $categories_result = mysqli_query($connect, $query);

                while ($row = mysqli_fetch_assoc($categories_result)) {
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_id'];
                ?>
                    <div class="col-sm-6">
                        <ul class="list-unstyled mb-0">

                            <li><a href="categories_search.php?cat_id=<?php echo $cat_id; ?>&cat_title=<?php echo $cat_title; ?>"><?php echo $cat_title ?></a></li>
                        </ul>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>