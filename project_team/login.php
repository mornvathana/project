<?php 
//  session_start();
//  if(isset($_SESSION['auth'])){
//      header('Location: index.php');
//      $_SESSION['message'] = "You already login!";
//      exit();
//  }
include('includes/header.php');
    require __DIR__ . "/vendor/autoload.php";
    $client = new Google\Client;
    $client->setClientId("");
    $client->setClientSecret("");
    $client->setRedirectUri("http://localhost:8080/ecommerce_project_sarana/");
    // 
    $client->addScope("email");
    $client->addScope("profile");

    $url = $client->createAuthUrl();
?>
    <!-- start -->
    <div class="form-body py-[70px]">
        <div class="Container 2xl:w-[35%] xl:w-[35%] lg:w-[45%] md:w-[70%] sm:w-[80%] w-[95%] mx-auto">
          <div class="forms">
            <div class="form login bg-blue-300 h-fit">

              <span class="title w-full flex justify-center relative">Login</span>
    
              <form action = "function/account.php" method = "post">
                <div class="input-field">
                <input type="email" name = "email" id="login-username" placeholder="Email" required />
                <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-field">
                <input type="password" name = "password" id="login-password" placeholder="Password" required />
                  <i class="fa-solid fa-lock"></i>
                  <i class="uil uil-eye-slash showHidePw"></i>
                </div>
    
                <div class="checkbox-text">
                  <div class="checkbox-content">
                    <input type="checkbox" id="logCheck" checked/>
                    <label for="logCheck" class="text">Remember me</label>
                  </div>
    
                  <a href="requestOTP.php" class="text">Forgot password?</a>
                </div>
    
                <div class="input-field button">
                  <input type="submit" name = "login_btn" value="Login" />
                </div>

                <div class="line-form"></div>

                <div class="media-options">
                    <a href="#" class="field google p-3 space-x-3 rounded-[6px]">
                        <img src="https://th.bing.com/th/id/R.0fa3fe04edf6c0202970f2088edea9e7?rik=joOK76LOMJlBPw&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fgoogle-logo-png-open-2000.png&ehk=0PJJlqaIxYmJ9eOIp9mYVPA4KwkGo5Zob552JPltDMw%3d&risl=&pid=ImgRaw&r=0" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>
              </form>
    
              <div class="login-signup">
                <span class="text"
                  >Don't have an account?
                  <a href="#" class="text signup-link">Register Now</a>
                </span>
              </div>
              
            </div>
    
            <!-- Registration Form -->
            <div class="form signup">
              <span class="title w-full flex justify-center">Registration</span>
    
              <form action = "function/account.php" method = "post">
                <div class="input-field">
                  <input type="text" name = "username" id="register-username" placeholder="Username" required />
                  <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                  <input type="email" name = "email" id="register-email" placeholder="Email" required />
                  <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                  <input type="password" name = "password" id="register-password" placeholder="Password" required />
                  <i class="uil uil-lock icon"></i>
                </div>
                <div class="input-field">
                  <input type="password" class="password" placeholder="Confirm Password" required />
                  <i class="uil uil-lock icon"></i>
                  <i class="uil uil-eye-slash showHidePw"></i>
                </div>
    
                <div class="checkbox-text">
                  <div class="checkbox-content">
                    <input type="checkbox" id="termCon" checked/>
                    <label for="termCon" class="text">I accepted all terms and conditions</label>
                  </div>
                </div>
    
                <div class="input-field button">
                  <input type="submit" name = "btn_register" value="Signup" />
                </div>
              </form>
    
              <div class="login-signup">
                <span class="text"
                  >Already have an account? 
                  <a href="#" class="text login-link">Login Now</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- end  -->
<?php include('includes/footer.php')?>