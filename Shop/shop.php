
<?php
@include '../Seller_page/config.php';
include "../homepage/includes/header_html.php"; 
include "../homepage/includes/header_body.php";
?> 

<style>
    .dropdown {
        margin-left: auto !important;

    }
</style>
<header class="py-5 border-bottom mb-4 hero " style="margin-top: 100px!important;">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Shop</h1>
            <p class="lead mb-0">A collection of other user's posted items</p>
        </div>
    </div>
</header>
<div class="container">
    <div style="padding-top: 10px;">
    <div class="row"><!--form method="GET"-->
    <div class="col">  
     <div  style="height: 150px;" class="card mb-4">
        <div class="card-header">Search</div>
            <div class="card-body">
                <div class="input-group">
                    <form method='GET'>
                    <input onchange='renderPage()' type="text" class="form-control bg-light text-dark" name='search' id='searchBar' placeholder="Search for..." style="width:80%;">
                    <!-- <span class="input-group-btn"> -->
                        <button type='submit' class="btn btn-default btn-primary" type="button" style="margin-left:320px;">Go!</button>
                    <!-- </span> -->
                  </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card md-4">
           <div class="card-header">Filter</div>
              <form method="GET">
                <div class="row">                 
                    <div class="col" style="padding-left:20px;">
                    <div class="form-check">
                            <input onchange='renderPage()' class="form-check-input" type="checkbox" name="category[]" value="Micro processor/Micro controler" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Micro Controller</label>
                    </div>
                    <div class="form-check">
                            <input onchange='renderPage()' class="form-check-input" type="checkbox" name="category[]" value="Motor" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">Motors</label>
                    </div>
                    <div class="form-check">
                            <input onchange='renderPage()' class="form-check-input" type="checkbox" name="category[]" value="Sensor" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">Sensors</label>
                    </div>
                    </div>
                    <div class="col">
                    <label for="sort-by">Sort by (Price)</label>
                        <select onchange='renderPage()' class="form-select form-select-sm " aria-label=".form-select-lg example" id="sort-by" name="sort-by" style="width:90%">
                            <option value="price_asc">Price: Low to High</option>
                            <option value="price_desc">Price: High to Low</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:19%;height:50px;margin-right:20px;margin-top:25px">Filter</button>
                  
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
    <div class="row" style="padding-left:10px; padding-right:10px; padding-bottom:10px">
    <?php
    $searchOrFilter = isset($_GET['category']) || isset($_GET['search']) || isset($_GET['sort-by']); 
    if(!$searchOrFilter){?> 
    <div class="card md-4">
                <div class="card-body container">
                    <h2>Latest Products</h2>
                    
                    <?php include "../Seller_page/products.php" ?>
</div>
                
            </div>
           <?php } ?>
            <!-- All products section -->
            <div class="card md-4">
                <div class="card-body container">
                    <h2>All Products</h2><div id="touchThis">
                    <?php include "includes/allProduct.php" ?></div>
                </div>
            </div>

    </div>
</div>
<script>
    function renderPage(){
        /*
        const box1 = document.getElementById("defaultCheck1");
        const box2 = document.getElementById("defaultCheck2");
        const box3 = document.getElementById("defaultCheck3");
        const search = document.getElementById("searchBar");
        const touch = document.getElementById("touchThis");
        const sort = document.getElementById("sort-by");

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            touch.innerHTML = this.responseText;
        //location.reload();
            }
        };
        //xmlhttp.open("GET","allProduct.php?search="+search.value+"&sort-by="+sort.value,true);
        //xmlhttp.send();
*/

    }


    </script>
<?php include "../homepage/includes/footer.php" ?>