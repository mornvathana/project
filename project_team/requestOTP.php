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
            <h2 class="text-2xl font-bold text-center mb-4 text-[#144194]">Request Email OTP</h2>
            <form action = "sendOTP.php" method = "post">
                <!-- Username -->
                <div class="relative mb-4">
                    <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="text" name = "email" id="login-username" placeholder="Email" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none" name = "login_btn">Send</button>
            </form>
        </div>
    </div>
     <!-- end  -->
<?php include('includes/footer.php')?>