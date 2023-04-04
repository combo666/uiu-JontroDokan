<!--Header section-->
<?php
    $page = basename($_SERVER['PHP_SELF'],'.php');
    
?>
<header>
    <div class="page-header__topline container-fluid row">
        <!-- <div class="text-light d-block">Welcome: Guest</div> -->
        <ul class="nav justify-content-end">
        <li class="nav-item">
  <a class="nav-link text-dark" aria-current="page" href="../././customers/login.php">Login</a>
  </li>
  <li class="nav-item">
  <a class="nav-link text-dark" aria-current="page" href="../././customers/register.php">Register</a>
  </li>
</ul>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src=".././assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'index')? 'active' : '' ?>" aria-current="page" href=".././index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'blog')? 'active' : '' ?>" href=".././blog/blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class = "nav-link <?= ($page == 'recycle')? 'active' : '' ?>" href=".././recycle/recycle.php">Recycle</a>
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
                            <i class="bi bi-person"></i>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="log.html">Logout</a></li>
                            <li><a class="dropdown-item" href="#">My Orders</a></li>
                            <li><a class="dropdown-item" href="#">My Posts</a></li>
                            <li><a class="dropdown-item" href="../././recycle/form.php">Add Items For Recycle</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>