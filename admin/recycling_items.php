
<?php include "./includes/header_html.php"; ?>

<?php include "./includes/topbar.php"; ?>

<?php include "../database/db_connect.php"; ?>


<div id="layoutSidenav">

    <?php include "includes/sidebar.php"; ?>

    <div id="layoutSidenav_content">
    <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Recycle Products</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Item for Recycle</li>
                    <li class="breadcrumb-item active">Recycle Products</li>
                </ol>
            </div>
        </main> 
        
        
<?php

    $item_image = "";
    $item_image = "";
    $res_avv_unit = "";
    $res_ord_quan = "";
    
    if (isset($_GET['item_delete'])) {

        $product_id = $_GET['item_delete'];
        $sql = "UPDATE `recycling` SET `status`= 1 WHERE p_id = $product_id";
        $del_res = mysqli_query($connect, $sql);

        if (!$del_res) {
            die("Query failed" . mysqli_error($connect));
            }
      }else if (isset($_GET['update'])) {
        
        
        $o_id = $_GET['update'];
        $lab_item_id = $_GET['lab_item_id'];

        $sql = "UPDATE `lab_item_order` SET `status`= 1 WHERE order_id = $o_id";
        $del_res = mysqli_query($connect, $sql);

        $sql_i = "UPDATE `lab_items` 
        SET `available_units` = (SELECT available_units FROM `lab_items` WHERE item_id = $lab_item_id) - (SELECT  `item_amount` FROM `lab_item_order` WHERE lab_item_id = $lab_item_id AND order_id = $o_id)
        WHERE item_id like (SELECT lab_item_id FROM lab_item_order WHERE order_id = $o_id)";
        $del_res = mysqli_query($connect, $sql_i);

        $avv_units ="SELECT * FROM `lab_items` WHERE item_id = $lab_item_id";
        $res_avv_units = mysqli_fetch_assoc(mysqli_query($connect, $avv_units));

        $ord_quan = "SELECT * FROM `lab_item_order` WHERE order_id = $o_id";
        $res_ord_quan = mysqli_fetch_assoc(mysqli_query($connect, $ord_quan));
        

        if( $res_avv_units['available_units'] < $res_ord_quan['item_amount'] ){
            $sql = "UPDATE `lab_item_order` SET `status`= 2 WHERE lab_item_id = $lab_item_id AND  order_id != $o_id";
            $del_res = mysqli_query($connect, $sql);
        }


      }
?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Order Request
    </div>
    <div class="card-body">

        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Receiver ID</th>
                    <th>Receiver Name </th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Receiver ID</th>
                <th>Receiver Name </th>
                <th>Product Image</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $query = "SELECT * FROM `recycling`";
                $response = mysqli_query($connect, $query);

                $count_row = mysqli_num_rows($response);
                if ($count_row == 0) {
                ?>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>


                    <?php
                } else {
                    while ($rows = mysqli_fetch_assoc($response)) {

                        $product_id = $rows['p_id'];
                        $product_name = $rows['p_name'];
                        $user_id = $rows['user_id'];

                        $q_u_name = "SELECT * FROM user WHERE id = $user_id";
                        $q_res = mysqli_query($connect, $q_u_name);

                        while($row = mysqli_fetch_assoc($q_res)){
                            $user_name = $row['first_name']." ".$row['last_name'];
                        }
                        
                        $product_image = $rows['p_image'];
                        
                        $status = $rows['status'];
                    

                    ?>
                        <tr>
                            <td><?php echo $product_id; ?></td>
                            <td><?php echo $product_name; ?></td>
                            <td><?php echo $user_id ?></td>
                            <td><?php echo $user_name; ?></td>
                            <td><img src="../recycle/image/<?php echo $product_image; ?>" alt="no_img" style="height: 50px; width:50px;"></td>
                            <td><?php if($status == 0){
                                            echo "Available";
                            }
                            else if($status == 1){
                                echo "Delivered!";
                            }else{
                                echo "Accepted";
                            }
                             ?></td>

                            <td colspan="2" class="text-center">

                            <?php

                            
                            
                            if($status == 0){ ?>
                            
                            <a class="btn btn-sm btn-danger ms-2" type="submit" name="item_delete" href="recycling_items.php?item_delete=<?php echo $product_id; ?>"> Deliver </a>
                            <?php
                            }else if($status == 1){
                            echo "Not Available";
                            }else if($status == 1){
                            echo "Accepted";
                            }
                            ?>


                                
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
        <?php
        if (isset($_GET['update']) ) {
            $item_id = $_GET['update'];
            if(isset($_POST['update_available_units_submit'])){
        
                $available_units = $_POST['available_units'];
                try{
                $sql = "UPDATE lab_items SET available_units={$available_units} WHERE item_id = '{$item_id}'";
                
                
                
                $del_res = mysqli_query($connect, $sql);
                }
                catch (mysqli_sql_exception $e) { 
                var_dump($e);
                exit; 
                } 
                header("Refresh:0");
            }
        }else if(isset($_GET['edit_item'])){
            $item_id = $_GET['item_id'];
            include "edit_lab_item.php";

        }
            
        ?>
    </div>
</div>

<?php include "./includes/footer.php" ?>