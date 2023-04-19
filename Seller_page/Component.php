<?php
include 'config.php';
?>

<?php include "../homepage/includes/header_html.php"; ?>
<?php include "../homepage/includes/header_body.php"; ?>
<!-- Component_details Show -->
<?php  
   if(isset($_GET['p_id'])) {
    $product_id = $_GET['p_id'];
    $sql = "SELECT * FROM `products` WHERE id=$product_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
      $select_products = mysqli_fetch_assoc($result);
     ?>
<div class="row">
  <div class="col" style="padding-top: 50px;padding-left:50px;">
  <img style="height:150px;width:350px;" src="../Seller_page/uploaded_img/<?php echo $select_products['image']; ?>" alt="">
  <div style="padding-top: 100px;">
      <h3>Product Details</h3>
      <p>The Arduino Mega 2560 is a microcontroller board based on the ATmega2560. It has 54 digital input/output pins (of which 15 can be used as PWM outputs), 16 analog inputs, 4 UARTs (hardware serial ports), a 16 MHz crystal oscillator, a USB connection, a power jack, an ICSP header, and a reset button. It contains everything needed to support the microcontroller; simply connect it to a computer with a USB cable or power it with a AC-to-DC adapter or battery to get started. The Mega 2560 board is compatible with most shields designed for the Uno and the former boards Duemilanove or Diecimila.
        The Mega 2560 is an update to the Arduino Mega, which it replaces.</p>
    </div>
  </div>
  <div class="col" style="padding-left: 30px; margin:20px;">
      <h1><?php echo $select_products['name']; ?></h1>
      <h5>Reference RBD-1397</h5>
      <br>
      <h4>Price: <?php echo $select_products['price']; ?>Tk</h4>
      <br>
      <div class="card md-4">
           <div class="card-header">Seller info</div>
                <div class="row">
                    <div class="col" style="padding-left:20px;">
                    <div class="form-check">
                       <h4>For sale by Name..</h4>
                    </div>
                    <div class="form-check">
                         <h5>Phone NO. 01753611721</h5>
                    </div>
                    <div class="form-check">
                       <h5>Eamil:sdey202074@bscse.uiu.ac.bd</h5>
                    </div>
                    <div class="form-check">
                        <h6>Other social media</h6>
                    </div>
                    </div>
                </div>
        </div>
  </div>
</div>
<?php
      }
    }
  ?>

<section class="latest-product">
    <div class="container">
        <h2>Similar products</h2>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="../assets/images/product/f1.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="condition-bar ">
                            <div class="condition-bar-item bad"></div>
                            <div class="condition-bar-item fair"></div>
                            <div class="condition-bar-item good"></div>
                        </div>
                        <h2 class="price">৳ 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="../assets/images/product/f3.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="condition-bar ">
                            <div class="condition-bar-item bad"></div>
                            <div class="condition-bar-item fair"></div>
                            <div class="condition-bar-item good"></div>
                        </div>
                        <h2 class="price">৳ 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="../assets/images/product/servo.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="condition-bar ">
                            <div class="condition-bar-item bad"></div>
                            <div class="condition-bar-item fair"></div>
                            <div class="condition-bar-item good"></div>
                        </div>
                        <h2 class="price">৳ 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="../assets/images/product/sensor.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="condition-bar">
                            <div class="condition-bar-item bad"></div>
                            <div class="condition-bar-item fair"></div>
                            <div class="condition-bar-item good"></div>
                        </div>
                        <h2 class="price">৳ 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href="" class="add-to-cart-btn">
                                <i class="bi bi-cart4"></i> Add to Cart
                            </a>
                            <a href="" class="add-to-favorite text-success">
                                <i class="bi bi-heart "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include "../homepage/includes/footer.php"; ?>