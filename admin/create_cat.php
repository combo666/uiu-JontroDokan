<?php include('includes/admin_header.php'); ?>
<?php include('../database/db_connect.php') ?>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">JontroDokan Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <?php include('includes/messages.php') ?>

            <?php include('includes/alert.php') ?>

            <?php include('includes/profile.php') ?>


        </ul>


        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <?php include('includes/sidebar.php') ?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Create Category
                        <small>Add new categories for posts</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->


            <style>
                .content_ {
                    margin-top: 20px;
                    margin-left: 0;
                    height: 500px;
                }
            </style>

            <?php

            if (isset($_POST['submit'])) {
                $cat_name = $_POST['cat'];
                // echo $cat_name . "category";
                $query = "insert into post_categories(cat_id, cat_title) VALUES (NULL, '$cat_name')";
                $result = mysqli_query($connect, $query);

                if (!$result) {
                    echo "ye";
                    die("query error");
                }
            }

            ?>
            <div class="row align-items-center d-flex content_">
                <div class="col-md-4">
                    <div class="col-sm-10">
                        <form method="post" action="create_cat.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Add Category name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="cat">
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 5px;" name="submit">Add</button>
                        </form>
                    </div>
                    <div class="col-sm-10"></div>
                    <div class="col-sm-10" style="display: <?php if(isset($_POST['edit'])) echo "visible"; else echo "none"?>">
                        <form method="post" action="create_cat.php">
                            <div class="mb-3">
                                <label for="catEdit" class="form-label">Edit Category name: </label>

<?php 
    if(isset($_POST['edit']))
    {
        $cat_id = $_POST['cat_id'];
        $cat_title = $_POST['cat_title'];   
    }
?>
<?php 

    if(isset($_POST['ed_submit']))
    {
        $newVAl = $_POST['ed_cat_title'];
        echo $newVAl;
        $query = "update post_categories SET cat_title='$newVAl' WHERE cat_id = $cat_id";
        $res = mysqli_query($connect, $query);
        if(!$res)
        {
            echo "error";
        }
    }
?>

                                <input type="text" class="form-control" id="catEdit" name="ed_cat_title" value="<?php echo $cat_title?>">
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 5px;" name="ed_submit">Submit</button>
                        </form>
                    </div>
                </div>


                <div class="col-md-6">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = "select * from post_categories";

                            $cats = mysqli_query($connect, $query);

                            $count = mysqli_num_rows($cats);

                            if ($count == 0) {
                                echo "<p>no category created</p>";
                            } else {
                                while ($rows = mysqli_fetch_assoc($cats)) {
                                    $cat_title = $rows['cat_title'];
                                    $cat_id = $rows['cat_id'];


                            ?>
                                    <tr>
                                        <form action="create_cat.php" method="post">
                                            <th scope="row"><input name="cat_id" type="text" value="<?php echo $cat_id; ?>" readonly="true" placeholder="<?php echo $cat_id; ?>" style="border: none; background: transparent; color: #000;" size="1"/></th>

                                            <td>
                                                <input name="cat_title" type="text" value="<?php echo $cat_title; ?>" readonly="true" placeholder="<?php echo $cat_title; ?>" style="border: none; background: transparent; color: #000;"/>
                                            </td>

                                            <td colspan="2" class="text-center">
                                                <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                                                <button class="btn btn-danger" type="submit" name="edit">Delete</button>
                                            </td>
                                        </form>
                                    </tr>
                            <?php

                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>