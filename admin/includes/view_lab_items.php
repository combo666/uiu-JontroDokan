<?php 
    
    if (isset($_GET['delete'])) {
        // Perform delete action
        $item_id = $_GET['delete'];
        $sql = "DELETE FROM lab_items WHERE item_id = {$item_id}";
        
        $del_res = mysqli_query($connect, $sql);
        if (!$del_res) {
            die("Query failed" . mysqli_error($connect));
            }
      }else if (isset($_GET['update'])) {
        // Perform delete action
        $item_id = $_GET['delete'];
        $sql = "DELETE FROM lab_items WHERE item_id = {$item_id}";
        
        $del_res = mysqli_query($connect, $sql);
        if (!$del_res) {
            die("Query failed" . mysqli_error($connect));
            }
      }
?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Published posts
    </div>
    <div class="card-body">

        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Available Units</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Details</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th>Id</th>
                    <th>Product Name</th>
                    <th>Available Units</th>
                    <th>Image</th>
                    <th>Tags</th>
                    <th>Details</th>
                    <th class="text-center">Actions</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $query = "SELECT * FROM `lab_items`";
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
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>


                    <?php
                } else {
                    while ($rows = mysqli_fetch_assoc($response)) {
                        $item_id = $rows['item_id'];
                        $item_name = $rows['item_name'];
                        $available_units = $rows['available_units'];
                        $image = $rows['image'];
                        $tag = $rows['tag'];
                        $item_details = $rows['item_details'];
                        

                    ?>
                        <tr>
                            <td><?php echo $item_id; ?></td>
                            <td><?php echo $item_name; ?></td>
                            <td><?php echo $available_units; ?></td>
                            <td><img src="../blog/image/<?php echo $image; ?>" alt="no_img" style="height: 50px; width:50px;"></td>
                            <td><?php echo $tag; ?></td>
                            <td><?php echo $item_details; ?></td>

                            <td colspan="2" class="text-center">
                                <a class="btn btn-sm btn-primary" type="submit" name="post_edit" href="../admin/labSupport.php?source=edit_post&p_id=<?php echo $item_id; ?>">Edit</a>

                                <a class="btn btn-sm btn-success ms-2" type="submit" name="update" href="../admin/labSupport.php?update=<?php echo $item_id; ?>"> Update</a>
                                
                                <a class="btn btn-sm btn-danger ms-2" type="submit" name="delete" href="../admin/labSupport.php?delete=<?PHP echo $item_id ?>"> Delete</a>
                                
                            </td>
                        </tr>



                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

