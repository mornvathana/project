<?php 
//  session_start();
//  if(isset($_SESSION['auth'])){
//      header('Location: index.php');
//      $_SESSION['message'] = "You already login!";
//      exit();
//  }
include('includes/header.php');
?>
    <!-- start -->
     <div class="mt-10 flex items-center justify-center" >

        <div class="w-[350px] sm:w-[400px] p-6 bg-white rounded-lg shadow-lg" id="login-form"  >
            <h2 class="text-2xl font-bold text-center mb-4 text-[#144194]">Login</h2>
            <form action = "function/account.php" method = "post">
                <!-- Username -->
                <div class="relative mb-4">
                    <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="text" name = "email" id="login-username" placeholder="Email" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Password -->
                <div class="relative mb-6">
                    <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="password" name = "password" id="login-password" placeholder="Password" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <span class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500" id="toggle-password">
                        <i class="fas fa-eye-slash"></i>
                    </span>
                </div>
                
                <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none" name = "login_btn">Login</button>
                
            </form>
            <div class="mt-4 text-center">
                <!-- <a href="#" class="text-blue-500" onclick="toggleForms()">Don't have an account? Register</a> -->
                <button class="text-blue-500" onclick="toggleForms()"><a href="requestOTP.php">forgot Password?</a></button>
                <button class="text-blue-500" onclick="toggleForms()">Don't have an account? <a href="register.php">Register</a></button>
            </div>
        </div>
    </div>
     <!-- end  -->
<?php include('includes/footer.php')?>