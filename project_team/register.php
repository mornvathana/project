<?php include('includes/header.php')?>;
<!--  -->
<div class="w-[350px] sm:w-[400px] p-6 bg-white rounded-lg shadow-lg" id="register-form" style = "margin: auto">
            <h2 class="text-2xl font-bold text-center mb-4 text-[#144194]">Register</h2>
            <form action = "function/account.php" method = "post">
                <!-- Username -->
                <div class="relative mb-4">
                    <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="text" name = "username" id="register-username" placeholder="Username" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
    
                <!-- Email -->
                <div class="relative mb-4">
                    <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="email" name = "email" id="register-email" placeholder="Email" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
    
                <!-- Password -->
                <div class="relative mb-6">
                    <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="password" name = "password" id="register-password" placeholder="Password" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <span class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500" id="toggle-register-password">
                        <i class="fas fa-eye-slash"></i>
                    </span>
                </div>
                <button type = "submit" name = "btn_register" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none font-medium">Register</button>
            </form>
            <div class="mt-4 text-center">
                <!-- <a href="#" class="text-blue-500" onclick="toggleForms()">Already have an account? Login</a> -->
                <button class="text-blue-500 font-medium" onclick="toggleForms()">Already have an account? <a href="login.php">Login</a></button>
            </div>
        </div>
<!--  -->
<?php include('includes/footer.php')?>