<?php
include 'config.php';
?>

<?php include "../homepage/includes/header_html.php"; ?>
<?php include "../homepage/includes/header_body.php"; ?>
<!-- Component_details Show -->
<div class="container">
  <?php  
  if(isset($_GET['p_id'])) {
    $product_id = $_GET['p_id'];
    $sql = "SELECT * FROM `products` WHERE id=$product_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
      $select_products = mysqli_fetch_assoc($result);
?>
  <div class="row">
    <div class="col-md-4 offset-md-7" style="margin-top: 100px;">
      <br>
      <h1><?php echo $select_products['name']; ?></h1>
      <h5>Reference RBD-1397</h5>
      <br>
      <h4>Tk <?php echo $select_products['price']; ?></h4>
      <br>
      <button class="btn btn-primary me-md-2" type="button">BUY NOW</button>
      <a href="" class="add-to-cart-btn">
        <i class="bi bi-cart4"></i> Add to Cart
      </a>
    </div>
    <div class="col-md-4 offset-md-1">
      <img style="height:150px;width:350px;" src="../Seller_page/uploaded_img/<?php echo $select_products['image']; ?>" alt="">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 offset-md-1">
      <h3>Product Details</h3>
      <p>The Arduino Mega 2560 is a microcontroller board based on the ATmega2560. It has 54 digital input/output pins (of which 15 can be used as PWM outputs), 16 analog inputs, 4 UARTs (hardware serial ports), a 16 MHz crystal oscillator, a USB connection, a power jack, an ICSP header, and a reset button. It contains everything needed to support the microcontroller; simply connect it to a computer with a USB cable or power it with a AC-to-DC adapter or battery to get started. The Mega 2560 board is compatible with most shields designed for the Uno and the former boards Duemilanove or Diecimila.
        The Mega 2560 is an update to the Arduino Mega, which it replaces.</p>
    </div>
  </div>
  <?php
      }
    }
  ?>
</div>
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