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
            <h2 class="text-2xl font-bold text-center mb-4 text-[#144194]">OPT</h2>
            <form action = "reset.password.php" method = "post">
                <!-- Username -->
                <div class="relative mb-4">
                    <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="number" name = "otp" id="login-username" placeholder="Enter OTP" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none" name = "check_opt">Submit</button>
            </form>
        </div>
    </div>
     <!-- end  -->
<?php include('includes/footer.php')?>