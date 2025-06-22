<?php 
    include('includes/header.php');
    if(isset($_SESSION['auth_user'])){
        $id = $_SESSION['auth_user']['user_id'];
    }   
?>
<div class="profile-block w-[90%] mx-auto mt-10 flex flex-col md:flex-row justify-between relative">
    <!-- menu -->
    <div class="menu w-[100%] md:w-[30%] h-fit sticky top-[4rem] bg-[#fff] z-[999]"
        style="border: 1px solid #d2d3d4; border-radius: 10px;">
        <ul class="space-y-3 font-medium text-[15px] p-5 font-[Poppins,hanuman,Sans-serif] text-gray-800"
            id="righ_button">
            <li class="active"><a href="#"><i class="fa-regular fa-user"></i> Profile</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-lock"></i></i> Change Password</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-cart-shopping"></i> My Orders</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-truck"></i> Order Tracking</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-heart"></i> My Favorites</a></li>
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
    <div class="flex space-x-4 mb-6 rounded-lg bg-gray-100 p-2">
      <img src="https://th.bing.com/th/id/R.b3cf4fdb4aa23910a48d8efa69c8b447?rik=tlXIaDQ20rnx2Q&riu=http%3a%2f%2fcdn.collider.com%2fwp-content%2fuploads%2f2016%2f03%2fsuperman-returns.jpg&ehk=V8oY2akdo8%2fHFZ0XXdU%2beMwvSyLlDUtmm8k9rIrk%2fK8%3d&risl=&pid=ImgRaw&r=0" alt="Avatar" class="w-20 h-20 rounded-full object-cover" />
      <div>
      <!-- Modal toggle -->
      <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-blue-800 font-semibold" type="button">
      Change Profile
      </button>
        <p class="text-sm text-gray-500">Upload JPG, PNG image required.</p>
      </div>

      <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <form method="post" action="" class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">    
            <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
            </div>
            <input id="dropzone-file" type="file" class="hidden" />
            </label>
            </div> 

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </form>
    </div>
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
          <i class="fa-solid fa-user"></i>
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
          <i class="fa-solid fa-envelope"></i>
        </span>
      </div>

      <!-- Phone -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
        <input type="tel" placeholder="Enter your phone number"
          class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
        <span class="absolute right-3 top-9 text-gray-400">
          <!-- Phone Icon -->
          <i class="fa-solid fa-phone"></i>
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
    <div class="page w-[100%] h-fit mt-5 md:mt-0 overflow-hidden hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
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
                <h2 class="text-2xl font-semibold text-blue-800 mb-6">My Orders</h2>

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
            name="tracking">
            <div class="">
                <h2 class="text-2xl font-semibold text-blue-800 mb-6">Order Tracking</h2>

                <div class="container mx-auto max-w-4xl">

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

        <!-- favorites -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="favorites">
            <div class="">
                <h1 class="text-green-900 font-[Montserrat,hanuman,Sans-serif] text-[20px] font-bold">My Favorites
                </h1>
                <div class="line w-[30%] bg-gray-500 h-[2px] rounded-md mt-1"></div>

                <!-- product-box -->
            <div
                class="product-box w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-4 gap-3 mt-5">
                <!-- box -->
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/Honor/Honor-Pad-X8a/1-17332981339izwY.png" alt=""
                                class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Mini-7/purple-1732616452hOIaG.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/Tecno/Tecno-Pad/Tecno-Megapad-10/1-1733106662Vq30k.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/Xiaomi/Xiaomi-Redmi-14C/blue-1-1732867506G5WZJ.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Mini-7/blue-1732616451VzJsr.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/Apple/iMac/iMac-24-M4-2024/silver-1732612162uAOhd.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://angkormeas.com/wp-content/uploads/2024/07/Z-Fold-6_Crafted-Black-300x300.jpg?v=1723378615"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://angkormeas.com/wp-content/uploads/2024/09/Tab-S10-Ultra-300x300.jpg?v=1727525896"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>

                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://angkormeas.com/wp-content/uploads/2024/09/Galaxy-Z-Flip6_Oct-300x300.jpg?v=1730212394"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://angkormeas.com/wp-content/uploads/2024/09/Tab-S10-Plus-300x300.jpg?v=1727526301"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                </div>

            </div>
            <!-- end of product-box -->

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

<!-- Toggle Password Visibility -->
<script>
    function togglePassword(id, iconId) {
      const input = document.getElementById(id);
      const icon = document.getElementById(iconId);
      if (input.type === "password") {
        input.type = "text";
        icon.innerText = "🙈";
      } else {
        input.type = "password";
        icon.innerText = "👁️";
      }
    }
  </script>
<?php include('includes/footer.php')?>