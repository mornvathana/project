<?php
include('includes/header.php');
?>
    <?php
    $otp = $_POST['otp'] ?? null;
    $conn = new mysqli("localhost","root","","ecommerce_data");
    $sql = "SELECT * FROM users WHERE otp = '$otp'";
    $sql_run = $conn->query($sql);
    if($sql_run->num_rows > 0){
        ?>
        <!-- start -->
    <div class="mt-10 flex items-center justify-center" >
    <div class="w-[350px] sm:w-[400px] p-6 bg-white rounded-lg shadow-lg" id="login-form"  >
    <h2 class="text-2xl font-bold text-center mb-4 text-[#144194]">Enter New Password</h2>
    <form action = "function/account.php" method = "post">
        <!-- Username -->
        <input type = "hidden" name = "otp" value = "<?php echo $otp?>">
        <div class="relative mb-4">
        <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-[45%] text-gray-500"></i>
        <input type="password" name = "new_password" id="login-username" placeholder="Enter New Password" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="relative mb-4">
        <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-[45%] text-gray-500"></i>
        <input type="password" name = "con_password" id="login-username" placeholder="confirm New Password" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none" name = "btn_password">Submit</button>
        </form>
       </div>
        </div>
        <!-- end  -->
        <?php
    }else{
        header('Location: enterOPT.php');
        exit();
    }
    ?>
<?php include('includes/footer.php')?>