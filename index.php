<?php
    session_start();
    if(isset($_SESSION['uname'])){
        $uname = $_SESSION['uname'];
    }
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UIU JontroDokan</title>
    <link rel="icon" href="./assets/images/favicon.png">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/sass/main.css">
    <link rel="stylesheet" href="./blog/css/style.css">
    <link rel="stylesheet" href="./recycle/css/style.css">
    <link rel="stylesheet" href=".././assets/css/style.css">
</head>
<body>

<!--Header section-->
<?php
    $page = basename($_SERVER['PHP_SELF'],'.php');
    
?>
<header>
    <?php
        if(!isset($_SESSION['uname'])){
            ?>
            <div class="page-header__topline container-fluid row">
                <!-- <div class="text-light d-block">Welcome: Guest</div> -->
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="./customers/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="./customers/register.php">Register</a>
                    </li>
                </ul>
            </div>
    <?php
        }
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'index')? 'active' : '' ?>" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./Shop/shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'blog')? 'active' : '' ?>" href="./blog/blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class = "nav-link <?= ($page == 'recycle')? 'active' : '' ?>" href="./recycle/recycle.php">Recycle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./lab_support/index.php">Laboratory support</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 action-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-heart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-cart4 position-relative">
                                <span style="font-size: 12px"
                                      class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">1 </span>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           <?php
                                if(isset($_SESSION['uname'])){
                                    ?>
                                    <i class="bi bi-person"><?php echo " ".$uname ?></i>
                                    <?php
                                }
                                else{
                                    ?>
                                    <i class="bi bi-person"></i>
                                    <?php
                                }
                           ?>
                            
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./log.php">Logout</a></li>
                            <li><a class="dropdown-item" href="#">My Orders</a></li>
                            <li><a class="dropdown-item" href="#">My Posts</a></li>
                            <li><a class="dropdown-item" href="./Seller_page/admin.php">sell Product</a></li>
                            <li><a class="dropdown-item" href="./recycle/form.php">Add Items For Recycle</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php include "./homepage/includes/slider.php"; ?>

<?php include "./homepage/includes/product_category.php"; ?>

<?php include "./homepage/includes/latest_products.php"; ?>

<section class="latest-product">
    <div class="container">
        <h2>Most Sell Products</h2>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <img src="assets/images/product/f1.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h2 class="price">৳ 200.00</h2>
                        <div class="btn d-flex justify-content-between align-items-center">
                            <a href=".\Component_details\Component.php" class="add-to-cart-btn">
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
                        <img src="assets/images/product/f3.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
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
                        <img src="assets/images/product/servo.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
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
                        <img src="assets/images/product/sensor.png" alt="">
                        <h2 class="product_name">
                            <a href="">something</a>
                        </h2>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
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

<!--Footer section-->
<footer class = "container-fluid">
    <div class="row">
    <div class="container header__topline bg-dark"><p class="m-0 text-center text-white">Copyright &copy; TeamMayhemMorph 2023</p></div>
    </div>
</footer>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
