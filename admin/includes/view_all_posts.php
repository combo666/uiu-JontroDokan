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
                    <th>Author</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Tags</th>
                    <th>Comments</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Tags</th>
                    <th>Comments</th>
                    <th>Date</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $query = "select * from posts";
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
                    </tr>


                    <?php
                } else {
                    while ($rows = mysqli_fetch_assoc($response)) {
                        $post_id = $rows['post_id'];
                        $post_auth = $rows['post_author'];
                        $post_title = $rows['post_title'];
                        $post_cat = $rows['post_category_id'];
                        $post_img = $rows['post_image'];
                        $post_stat = $rows['post_status'];
                        $post_tags = $rows['post_tags'];
                        $post_comments = $rows['post_comment_count'];
                        $post_date = $rows['post_date'];


                    ?>
                        <tr>
                            <td><?php echo $post_id ?></td>
                            <td><?php echo $post_auth ?></td>
                            <td><?php echo $post_title ?></td>
                            <td><?php echo $post_cat ?></td>
                            <td><img class="img-fluid" src="../blog/image/<?php echo $post_img; ?>" alt="no_img"></td>
                            <td><?php echo $post_stat ?></td>
                            <td><?php echo $post_tags ?></td>
                            <td><?php echo $post_comments ?></td>
                            <td><?php echo $post_date ?></td>
                        </tr>



                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>