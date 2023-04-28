<?php include ".././homepage/includes/header_html.php"?>
<?php include ".././homepage/includes/header_body.php"?>

<?php

include '../database/db_connect.php';

$login = false;
$loginError = false;
if(isset($_POST['login_submit'])){

  $emailid = $_POST["email"];
  $password = $_POST["password"];
  
  $hash = "$2y$10$";
    $salt = "youknowinknowblahblaHHjkI810";
    $combine = $hash.$salt;
    $encrypted_pass = crypt($password, $combine);

  $sql = "SELECT * FROM `user` WHERE email = '$emailid' AND password = '$encrypted_pass' ";

  $res = mysqli_query($connect, $sql);
  $uname = mysqli_fetch_assoc($res);

  $result = mysqli_query($connect, $sql);
  $num = mysqli_num_rows($result);

  if($num == 1){
    $login = true;

    $_SESSION['uname'] = $uname["first_name"] ." ".$uname["last_name"];
    

  }else{
    $loginError = true;
  }
  
}

?>



<?php 

if($login){
  echo "<div class=\"alert alert-success\" role=\"alert\">
      Login successful.
      </div> ";
      ?>
      <meta http-equiv="refresh" content="1.2; url='../index.php'" />
      <?php
}if($loginError){
  echo "<div class=\"alert alert-danger\" role=\"alert\">
  Sorry! Could not login.
  </div>";
}
?>

<body>
    <div class="row container-fluid">
        <div class="cont">
            <div class="login-form">
                <section class="vh-100">
                    <div class="container py-5 h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                          <div class="card border border-3" style="border-radius: 1rem;">
                            <div class="row g-0">
                              <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="./images/other/pexels-nothing-ahead-13064556.jpg"
                                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                              </div>
                              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                  
                                  <form action="#" method="post">
                  
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                      <span class="h1 fw-bold mb-0">Log In</span>
                                    </div>
                  
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  
                                    <div class="form-outline mb-4">
                                      <input type="email" id="form2Example17" name="email" class="form-control form-control-lg border" required/>
                                      <label class="form-label" for="form2Example17">Email address</label>
                                    </div>
                  
                                    <div class="form-outline mb-4">
                                      <input type="password" id="form2Example27" name="password" class="form-control form-control-lg border" required/>
                                      <label class="form-label" for="form2Example27">Password</label>
                                    </div>
                  
                                    <div class="pt-1 mb-4">
                                      <button class="btn btn-dark btn-lg btn-block" name="login_submit" type="submit" >Login</button>
                                    </div>
                  
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                                        style="color: #393f81;">Register here</a></p>
                                  </form>
                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
    </div>
<?php include ".././homepage/includes/footer.php"?>