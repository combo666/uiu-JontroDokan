<?php include "../homepage/includes/header_body.php";?>
<?php include "../homepage/includes/header_html.php";?>


<style>
    icon-shape {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  vertical-align: middle;
}

.icon-sm {
  width: 2rem;
  height: 2rem;
  
}
</style>
<?php include('../database/db_connect.php')?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="card mb-3">
                <div class="card-body container">
                    <h1 class="fw-bolder mb-1" >Add to Your Lab Items</h1>
                    

                    
                    
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card mb-3">
                                            <div class="card-body container">

                    <?php

                    if(isset($_GET["i_id"])){
                        $i_id= $_GET["i_id"];
                        $query = "SELECT * FROM `lab_items` WHERE item_id = {$i_id}"; 
                        $response = mysqli_query($connect, $query);
                    }




                    $count_row = mysqli_num_rows($response);

                    if ($count_row != 0) {
                        while ($rows = mysqli_fetch_assoc($response)) {
                            $item_id = $rows['item_id'];
                            $item_name = $rows['item_name'];
                            $available_units = $rows['available_units'];
                            $item_image = $rows['item_image'];
                            $item_tag = $rows['tag'];
                            $item_details = $rows['item_details'];
                            ?>
                            <article>
                        <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h2 class="fw-bolder mb-1"><?php echo $item_name; ?></h2>
                                    <!-- Post meta content-->
                                    <!-- Post categories-->
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">#<?php echo $item_tag; ?></a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><img class="img-fluid rounded" src="image/<?php echo $item_image; ?>"  width="500" alt="..." /></figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                    <h3 class="fw-bolder mb-1">Details</h3>
                                    <p class="fs-5 mb-4"><?php echo $item_details; ?></p>
                                    <div class="col-md-6 col-12">
                                            <div class="row">
                                                        <div class="col-12">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <p class="text-dark">Item Amount<p>
                                                            </div>
                                                            <div class="input-group w-auto justify-content-end align-items-center">
                                                                <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity" id="decr">
                                                                <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25" disabled>
                                                                <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity" id="incr">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                </section>

                              




                            </article>

                                                    
                                            


                            <?php
                        }
                    }
                        
                        
                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                </div>
            </div>
        </div>
            
    </div>
</div>
<script> 
document.getElementById("incr").addEventListener("click",function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }
)
document.getElementById("decr").addEventListener("click",function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }
);
    $('.input-group').on('click', '.button-plus', function(e) {
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });
</script>
<?php include "../homepage/includes/footer.php";?>


/* lab items css  */
