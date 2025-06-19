<?php 
    include('includes/header.php');
    if(isset($_SESSION['auth_user'])){
        $id = $_SESSION['auth_user']['user_id'];
    }   
?>
<div class="profile-block w-[90%] mx-auto mt-10 flex flex-col md:flex-row justify-between relative">
    <!-- menu -->
    <div class="menu w-[100%] md:w-[30%] h-fit sticky top-[4rem]"
        style="border: 1px solid #d2d3d4; border-radius: 10px;">
        <ul class="space-y-3 font-medium text-[15px] p-5 font-[Poppins,hanuman,Sans-serif] text-gray-800"
            id="righ_button">
            <li class="active"><a href="#"><i class="fa-regular fa-user"></i> Profile</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-lock"></i></i> Change Password</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-cart-shopping"></i> My Orders</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-truck"></i> Order Tracking</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
        </ul>
    </div>

    <div class="all-page w-[100%] md:w-[68%]">
        <!-- profile-page -->
        <div class="page w-[100%] h-fit mt-5 md:mt-0 overflow-hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="profile">
            <div class="w-full mx-auto p-6 bg-white rounded-lg shadow">
    <h2 class="text-2xl font-semibold text-blue-800 mb-6">Personal Information</h2>

    <!-- Avatar -->
    <div class="flex items-center space-x-4 mb-6">
      <img src="https://soklyphone.com/upload/customers/Gc6u4rIIynH64zoPGbg2.png" alt="Avatar" class="w-20 h-20 rounded-full object-cover" />
      <div>
        <button class="text-blue-600 hover:underline">Change avatar</button>
        <p class="text-sm text-gray-500">Upload JPG, PNG image required.</p>
      </div>
    </div>

    <!-- Form Fields with Right-Aligned Icons -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

      <!-- Full Name -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
        <input type="text" value="mroun"
          class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span class="absolute right-3 top-9 text-gray-400">
          <!-- User Icon -->
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M5.121 17.804A9 9 0 1118.88 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </span>
      </div>

      <!-- Birthday -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">Birthday</label>
        <input type="date" value="2020-06-14"
          class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span class="absolute right-3 top-9 text-gray-400">
          <!-- Calendar Icon -->
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M8 7V3m8 4V3M5 11h14M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </span>
      </div>

      <!-- Email -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" value="mrounit83@gmail.com"
          class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span class="absolute right-3 top-9 text-gray-400">
          <!-- Mail Icon -->
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M16 12H8m8 0l-4-4m0 8l4-4m-4 4V4m0 16a9 9 0 110-18 9 9 0 010 18z" />
          </svg>
        </span>
      </div>

      <!-- Phone -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
        <input type="tel" placeholder="Enter your phone number"
          class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span class="absolute right-3 top-9 text-gray-400">
          <!-- Phone Icon -->
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 5a2 2 0 012-2h2.586a1 1 0 01.707.293l2.707 2.707a1 1 0 010 1.414L9 10l5 5 2.586-2.586a1 1 0 011.414 0l2.707 2.707a1 1 0 01.293.707V19a2 2 0 01-2 2h-2c-9.941 0-18-8.059-18-18V5z" />
          </svg>
        </span>
      </div>

      <!-- Address -->
      <div class="relative md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
        <textarea placeholder="Enter your address" rows="2"
          class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300"></textarea>
        <span class="absolute right-3 top-11 text-gray-400">
          <!-- Location Icon -->
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zM12 22s8-4.5 8-10A8 8 0 104 12c0 5.5 8 10 8 10z" />
          </svg>
        </span>
      </div>
    </div>

    <!-- Update Button -->
    <div class="text-center">
      <button class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-6 py-2 rounded">Update</button>
    </div>
    </div>
    </div>

    <!-- change password -->
    <div class="page w-[100%] h-fit mt-5 md:mt-0 overflow-hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="password">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-semibold text-blue-800 mb-6">Change Password</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
      <!-- Current Password -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
        <input type="password" id="currentPass" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span onclick="togglePassword('currentPass', 'iconCurrent')" id="iconCurrent" class="absolute right-3 top-[30px] cursor-pointer select-none">👁️</span>
      </div>

      <!-- New Password -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
        <input type="password" id="newPass" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span onclick="togglePassword('newPass', 'iconNew')" id="iconNew" class="absolute right-3 top-[30px] cursor-pointer select-none">👁️</span>
      </div>

      <!-- Re-enter New Password -->
      <div class="relative md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Re-enter your password</label>
        <input type="password" id="reNewPass" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span onclick="togglePassword('reNewPass', 'iconRe')" id="iconRe" class="absolute right-3 top-[30px] cursor-pointer select-none">👁️</span>
      </div>
    </div>

    <!-- Update Button -->
    <div class="text-center">
      <button class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-6 py-2 rounded">Update</button>
    </div>
    </div>
    </div>

        <!-- orders-page -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="orders">
            <div class="">
                <h1 class="text-green-900 font-[Montserrat,hanuman,Sans-serif] text-[20px] font-bold">My Orders</h1>
                <div class="line w-[13%] bg-gray-500 h-[2px] rounded-md mt-1"></div>

                <!-- order-box-noresponsive -->
                <div class="order-box w-[100%] h-fit hidden md:block">
                    <div class="box">
                        <!-- form of cart-box -->
                        <form action="" method="POST"
                            class="w-full font-[Poppins,hanuman,Sans-serif] text-gray-700 mt-5">

                            <!-- table of product-cart -->
                            <table class="">
                                <thead class="">
                                    <tr class="font-normal text-md">
                                        <td class="invisible"></td>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>A4 Receipt</th>
                                        <th>Small Receipt</th>
                                    </tr>
                                </thead>
                                <tbody class="font-normal">
                                    <?php
                                    $cart = getOrders($id);
                                    if($cart->num_rows > 0){
                                        foreach($cart as $item){
                                        ?>
                                    <tr class="border-b-2">
                                        <td><a href="#"><img
                                                    src="uploads/category/<?= $item['product_image']?>"
                                                    alt="Product Image"></a></td>
                                        <td>
                                            <?= $item['product_name']?>
                                        </td>
                                        <td>
                                            <?= $item['product_price']?>
                                        </td>
                                        <td><input type="number" readonly id="inputValue"
                                                value="<?= $item['product_qty']?>" min="0" step="1"
                                                class="w-[70px] text-center border border-gray-300 rounded-lg" disabled>
                                        </td>
                                        <td>
                                            <?php
                                                    $idorder = 0;
                                                    $price = getPrice($item['id'],$id);
                                                    if($price->num_rows > 0){
                                                        foreach($price as $num){
                                                        $idorder = $num['id'];
                                                        ?>
                                            <?= $num['total_price']?>
                                            <?php
                                                        }
                                                    }
                                                ?>
                                        </td>
                                        <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1"><a
                                                href="action/invoice.php?cartId=<?= $item['id']?>&orderid=<?= $idorder?>&userid=<?= $item['user_id']?>"
                                                target="_blank"><i
                                                    class="fas fa-download text-green-500 rounded-sm p-2 cursor-pointer bg-green-100"></i></a>
                                        </td>
                                        <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1"><a
                                                href="action/smallinvoice.php?cartId=<?= $item['id']?>&orderid=<?= $idorder?>&userid=<?= $item['user_id']?>"
                                                target="_blank"><i
                                                    class="fas fa-download text-green-500 rounded-sm p-2 cursor-pointer bg-green-100"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

                <!-- order-box-responsive -->
                <div class="cart-box w-[100%] h-fit mt-3 block md:hidden">
                    <div class="box">
                        <!-- form of cart-box -->
                        <form action="" method="POST"
                            class="w-full font-semibold font-[Poppins,hanuman,Sans-serif] text-gray-700">
                            <!-- cart -->
                            <div class="cart w-full space-y-5 border-b-2 pb-3 text-sm">

                                <div class="flex justify-between w-full">
                                    <label for="product-image" class="invisible">Image:</label>
                                    <div><img
                                            src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.plus_.green_-300x300.png"
                                            alt="Product Image" class="w-[100px]"></div>
                                </div>

                                <div class="flex justify-between w-full">
                                    <label for="product-name">Product:</label>
                                    <div class="text-right"><a href="#">iPhone 16 Plus – Non active</a></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="price">Price:</label>
                                    <div>$15.00</div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="qty">Quantity:</label>
                                    <div><input type="number" id="inputValue" value="0" min="0" step="1"
                                            class="w-[70px] text-center border border-gray-300 rounded-lg"></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="sub-total">Sub Total:</label>
                                    <div>$15.00</div>
                                </div>

                            </div>

                            <!-- cart -->
                            <div class="cart w-full space-y-5 border-b-2 pb-3 text-sm mt-3">

                                <div class="flex justify-between w-full">
                                    <label for="product-image" class="invisible">Image:</label>
                                    <div><img
                                            src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16pro.max_.gold_-300x300.png"
                                            alt="Product Image" class="w-[100px]"></div>
                                </div>

                                <div class="flex justify-between w-full">
                                    <label for="product-name">Product:</label>
                                    <div class="text-right"><a href="#">iPhone 16 Plus – Non active</a></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="price">Price:</label>
                                    <div>$15.00</div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="qty">Quantity:</label>
                                    <div><input type="number" id="inputValue" value="0" min="0" step="1"
                                            class="w-[70px] text-center border border-gray-300 rounded-lg"></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="sub-total">Sub Total:</label>
                                    <div>$15.00</div>
                                </div>

                            </div>

                            <button class="mt-5 bg-blue-500 text-white rounded-lg p-2 text-sm"><a href="#"> <i
                                        class="fa-regular fa-pen-to-square"></i> Update</a></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- orders-tracking -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="stracking">
            <div class="">
                <h1 class="text-green-900 font-[Montserrat,hanuman,Sans-serif] text-[20px] font-bold">My Orders Tracking
                </h1>
                <div class="line w-[30%] bg-gray-500 h-[2px] rounded-md mt-1"></div>

                <div class="container mx-auto px-4 py-8 max-w-4xl">

                    <!-- Order Summary -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-8">
                        <div class="flex flex-col md:flex-row justify-between items-center">
                            <div class="mb-4 md:mb-0 text-center md:text-left">
                                <h2 class="text-xl font-semibold text-gray-800">Hea Oun Cambodia</h2>
                                <p class="text-gray-600">Placed on June 15, 2023</p>
                            </div>
                            <div class="text-center md:text-right">
                                <p class="text-gray-600">Total Amount</p>
                                <p class="text-2xl font-bold text-gray-800">$149.99</p>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Tracking -->
                      <div id="authentication-modal" tabindex="-1" aria-hidden="true" 
                    class="hidden displayareapopup overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        
                    </div>
                    <!-- end processing tracking -->
                    <!-- Order Items Table -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-8 border border-gray-100 overflow-x-auto">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Order Items</h2>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Product</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total Price</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantity</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Shipping Detail</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Item 1 -->
                                        <?php
                                        $cart = getOrders($id);
                                        if($cart->num_rows > 0){
                                            foreach($cart as $item){
                                            ?>
                                            <tr>
                                             <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-16 w-16">
                                                    <img class="h-16 w-16 rounded-md object-cover"
                                                        src="uploads/category/<?= $item['product_image']?>"
                                                        alt="">
                                                </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900"><?= $item['product_name']?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                $
                                            <?php
                                            $idorder = 0;
                                            $price = getPrice($item['id'],$id);
                                            if($price->num_rows > 0){
                                                foreach($price as $num){
                                                $idorder = $num['id'];
                                                ?>
                                            <?= $num['total_price']?>
                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?= $item['product_qty']?>
                                            </td>
                                            
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <button class="text-blue-600 hover:text-blue-900" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" data-id = "<?= $item['id']?>" id = "viewdetail" type = "button">View Details</button>
                                            </td>
                                        </tr>
                                            <?php
                                            }
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Order Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Shipping Address -->
                        <div class="bg-white rounded-xl shadow-md p-6">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-truck text-gray-500 mr-2"></i>
                                Shipping Address
                            </h2>
                            <div class="text-gray-600">
                                <p class="font-medium">Hea Oun Cambodia</p>
                                <p>123 Main Street</p>
                                <p>Apartment 4B</p>
                                <p>Svay Rieng, NY 10001</p>
                                <p>Cambodia</p>
                                <p class="mt-2">
                                    <i class="fas fa-phone-alt mr-2"></i> 0963904112
                                </p>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="bg-white rounded-xl shadow-md p-6">
                            <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-credit-card text-gray-500 mr-2"></i>
                                Payment Method
                            </h2>
                            <div class="flex items-center">
                                <div class="bg-blue-100 p-2 rounded-lg mr-3 w-12 h-12">
                                    <img src="https://blog.millionero.com/wp-content/uploads/2023/11/millionero_digital_currency_system_bakong_service_national_bank_of_cambodia.jpg"
                                        alt="" class="w-full h-full">
                                </div>
                                <div>
                                    <p class="font-medium font-[Poppins,hanuman,Sans-serif] text-xl">បាគង</p>
                                </div>
                            </div>
                            <div class="mt-6 pt-4 border-t border-gray-200">
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">Subtotal (3 items)</span>
                                    <span class="font-medium">$149.99</span>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">Shipping</span>
                                    <span class="font-medium text-green-600">Free</span>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">Tax</span>
                                    <span class="font-medium">$12.00</span>
                                </div>
                                <div class="flex justify-between font-semibold mt-3 pt-2 border-t border-gray-200">
                                    <span>Total</span>
                                    <span>$161.99</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
</div>
<script>
    $(document).ready(function(){
        $(document).on("click","#closeBtn",function(){
             $('.displayareapopup').addClass('hidden'); 
        });

        $(document).on("click","#viewdetail",function(){
            let id = $(this).data("id");
            const display = $("#authentication-modal");
            $.ajax({
                method: "POST",
                url: "action/detailshipping.php",
                data: {
                    "id" : id,
                },
                dataType: "json",
                success: function (data) {
                    if(data.length > 0){
                        let txt = "";
                        let box1 = "";
                        let color1 = "";
                        let box2 = "";
                        let color2 = "";
                        let box3 = "";
                        let color3 = "";
                        for(i in data){
                            let item = data[i];
                            if(item.status == 1){
                                box1 = "bg-green-500";
                                box2 = "bg-red-500";
                                box3 = "bg-red-500";
                                color1 = "text-green-500";
                                color2 = "text-red-500";
                                color3 = "text-red-500";
                            }else if(item.status == 2){
                                box1 = "bg-green-500";
                                box2 = "bg-green-500";
                                box3 = "bg-red-500";
                                color1 = "text-green-500";
                                color2 = "text-green-500";
                                color3 = "text-red-500";
                            }
                            else if(item.status == 3){
                                box1 = "bg-green-500";
                                box2 = "bg-green-500";
                                box3 = "bg-green-500";
                                color1 = "text-green-500";
                                color2 = "text-green-500";
                                color3 = "text-green-500";
                            }else{
                                box1 = "";
                                box2 = "";
                                box3 = "";

                                color1 = "";
                                color2 = "";
                                color3 = "";
                            }
                            txt += `<div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Shipping Report
                                    </h3>
                                    <button type="button" 
                                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                                    data-modal-hide="authentication-modal" id = "closeBtn">
                                        <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <form class="space-y-4" action="#">
                                        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
                                            <div class="flex flex-col md:flex-row items-center">
                                                <!-- Status Steps -->
                                                <div class="flex-1">
                                                <div class="space-y-6">
                                                    <!-- Step 1 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div
                                                                class="w-4 h-4 rounded-full mt-1 mx-1 ${box1} border-4 mt-1">
                                                            </div>
                                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color1}">Pedding</h3>
                                                            <p class="text-sm text-gray-600 mt-1">We've received your order</p>
                                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                                <i class="far fa-clock mr-1.5"></i>
                                                                June 15, 11:30 AM
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Step 2 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div
                                                                class="w-4 h-4 rounded-full mt-1 mx-1 ${box2} border-4 mt-1">
                                                            </div>
                                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color2}">Processing</h3>
                                                            <p class="text-sm text-gray-600 mt-1">Items packaged and ready for shipment</p>
                                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                                <i class="far fa-clock mr-1.5"></i>
                                                                June 16, 2:15 PM
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- Step 4 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div class="w-4 h-4 rounded-full mt-1 mx-1 ${box3} border-4 border-gray-100 mt-1">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color3}">Delivered</h3>
                                                            <p class="text-sm text-gray-600 mt-1">Estimated delivery date</p>
                                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                                <i class="far fa-clock mr-1.5"></i>
                                                                June 20, by end of day
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div><!-- .space-y-6 -->
                                                </div><!-- .flex-1 -->
                                            </div><!-- .flex -->
                                        </div><!-- .p-6 -->
                                    </form>
                                </div><!-- .p-4 -->
                            </div><!-- .modal content -->
                        </div><!-- .p-4 -->`;
                        }
                        display.html(txt);
                    }
                }
            });
        });
    });
</script>
<?php include('includes/footer.php')?>