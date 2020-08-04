<?php include("includes/login_header.php");
 session_start();  
 if(isset($_SESSION["fullname"]))  
 {  
      header("location:http://localhost/delivery/restaurant_index.php");  
 } 
error_reporting(E_ALL ^ E_NOTICE);  
$fullname = mysqli_real_escape_string($link, $_POST["fullname"]);  

if(isset($_POST['login'])){
    if(empty($_POST["fullname"]) || empty($_POST["password"]))  
    {  
         $error = "Шаардлагатай талбаруудыг бөглөнө үү!";  
    }  
    else  
    {   
         $password = mysqli_real_escape_string($link, $_POST["password"]); 
         $query = "SELECT * FROM users WHERE fullname = '$fullname'";  
         $result = mysqli_query($link, $query);  
         if(mysqli_num_rows($result) > 0)  
         {  
              while($row = mysqli_fetch_array($result))  
              {  
                   if(password_verify($password, $row["password"]))  
                   {
                        $_SESSION["fullname"] = $fullname;  
                        header("location:http://localhost/delivery/restaurant_index.php");
                   }
                   else  
                   {  
                        //return false;  
                        $error = "Та нэвтрэх боломжгүй байна!";   
                   }  
              }  
         }  
         else  
         {  
            $error = "Та нэвтрэх боломжгүй байна!";  
         }  
    }  
    }  

?>
    <!-- Login 14 start -->
    <div class="login-14">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-5 col-md-12 bg-img none-992 align-self-center">
                    <div class="info">
                        <div class="logo clearfix">
                            <a href="login.php">
                                <img src="assets/img/logos/logo.png" alt="logo">
                            </a>
                        </div>
                        <ul class="social-list">
                            <li>
                                <a href="#" class="facebook-bg">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google-bg">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin-bg">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest-bg">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                    <div class="form-section">
                        <div class="logo-2 clearfix">
                            <a href="login.php">
                                <img src="assets/img/logos/logo-2.png" alt="logo">
                            </a>
                        </div>
                        <h3>Нэвтрэх</h3>
                        <div class="login-inner-form">
                            <form action="login.php" method="POST">
                                <div class="form-group form-box">
                                    <input type="text" name="fullname" class="input-text" placeholder="Нэр" 
                                    value="<?php error_reporting(E_ALL ^ E_NOTICE); echo $fullname?>">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                                <div class="form-group form-box">
                                    <input type="password" name="password" class="input-text" placeholder="Нууц үг" 
                                    <i class="flaticon-password"></i>
                                </div>
                                <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                        Сануулах
                                    </label>
                                    </div>
                                    <a href="forgot-password.php">Нууц үгээ мартсан уу?</a>
                                </div>
                                <div class="login_error">
                                <?php error_reporting(E_ALL ^ E_NOTICE);  echo $error; ?>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn-md btn-theme btn-block" name="login" >Нэвтрэх</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 14 end -->
    <?php include("includes/login_footer.php"); ?>