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
            <li class=""><a href="#"><i class="fa-solid fa-cart-shopping"></i> My Orders</a></li>
            <li class=""><a href="#"><i class="fa-solid fa-truck"></i> Order Tracking</a></li>
        </ul>
    </div>

    <div class="all-page w-[100%] md:w-[68%]">
        <!-- profile-page -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="profile">
            <div class="text-[20px] font-semibold">
                <h1 class="text-green-900 font-[Montserrat,hanuman,Sans-serif] font-bold">My Profile</h1>
                <div class="line w-[13%] bg-gray-500 h-[2px] rounded-md mt-1"></div>
                <div class="mt-5">
                    <form id="myForm" class="space-y-4">
                        <!-- Input 1 -->
                        <?php
                        $user = getById("users",$id);
                        if($user->num_rows > 0){
                         foreach($user as $users){
                        ?>
                        <div>
                            <label for="input1"
                                class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Username</label>
                            <input type="text" id="input1"
                                class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 font-medium text-gray-800"
                                placeholder="Enter your name" value="<?= $users['name']?>" />
                        </div>
                        <!-- Input 2 -->
                        <div>
                            <label for="input2"
                                class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Email</label>
                            <input type="text" id="input2"
                                class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 font-medium text-gray-800"
                                placeholder="Heaoun@gmail.com" value="<?= $users['email']?>" />
                        </div>
                        <?php
                         }
                        }
                    ?>
                        <!-- Password Fields -->
                        <div id="passwordFields" class="hidden">
                            <div>
                                <label for="password"
                                    class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Old
                                    Password</label>
                                <input type="password" id="password"
                                    class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Old Password" />
                            </div>

                            <div>
                                <label for="password"
                                    class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">New
                                    Password</label>
                                <input type="password" id="password"
                                    class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="New Password" />
                            </div>

                            <div>
                                <label for="verifyPassword"
                                    class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Verify
                                    Password</label>
                                <input type="password" id="verifyPassword"
                                    class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex">
                            <!-- Edit Button -->
                            <button id="editBtn" type="button"
                                class="px-4 py-2 bg-blue-500 text-white rounded-md text-[15px]" onclick="editMode()"><i
                                    class="fa-solid fa-pen-to-square"></i> Edit</button>

                            <!-- Update Button -->
                            <button id="updateBtn" type="submit"
                                class="hidden px-4 py-2 bg-green-500 text-white rounded-md text-[15px]"
                                onclick="updateMode()"><i class="fa-solid fa-floppy-disk"></i> Update</button>

                            <!-- Cancel Button -->
                            <a href="logout.php" id="logoutBtn" type="button"
                                class="px-4 py-2 bg-red-500 text-white rounded-md text-[15px] ml-2"><i
                                    class="fa-solid fa-right-from-bracket"></i> Logout</a>
                        </div>
                    </form>
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
                                                    src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.plus_.green_-300x300.png"
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
                    <div class="bg-white rounded-xl shadow-md p-6 mb-8">
                        <div class="flex flex-col md:flex-row items-center">

                            <!-- Status Steps -->
                            <div class="flex-1">
                                <div class="space-y-6">
                                    <!-- Step 1 -->
                                    <div class="flex items-start">
                                        <div class="mr-4 flex flex-col items-center">
                                            <div
                                                class="w-4 h-4 rounded-full bg-green-500 border-4 border-green-100 mt-1">
                                            </div>
                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-800">Order Placed</h3>
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
                                                class="w-4 h-4 rounded-full bg-green-500 border-4 border-green-100 mt-1">
                                            </div>
                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-800">Order Processed</h3>
                                            <p class="text-sm text-gray-600 mt-1">Items packaged and ready for shipment
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                <i class="far fa-clock mr-1.5"></i>
                                                June 16, 2:15 PM
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Step 3 -->
                                    <div class="flex items-start">
                                        <div class="mr-4 flex flex-col items-center">
                                            <div
                                                class="w-4 h-4 rounded-full bg-blue-500 border-4 border-blue-100 mt-1 animate-pulse">
                                            </div>
                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-800">Shipped</h3>
                                            <p class="text-sm text-gray-600 mt-1">Carrier has picked up package</p>
                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                <i class="far fa-clock mr-1.5"></i>
                                                June 17, 9:45 AM
                                            </p>
                                            <div class="mt-2 text-sm text-blue-600">
                                                <i class="fas fa-truck mr-1.5"></i>
                                                Tracking #: វីរប៊ុនថាំ
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 4 -->
                                    <div class="flex items-start">
                                        <div class="mr-4 flex flex-col items-center">
                                            <div class="w-4 h-4 rounded-full bg-gray-300 border-4 border-gray-100 mt-1">
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-800">Delivered</h3>
                                            <p class="text-sm text-gray-600 mt-1">Estimated delivery date</p>
                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                <i class="far fa-clock mr-1.5"></i>
                                                June 20, by end of day
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                            Price</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantity</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Item 1 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-16 w-16">
                                                    <img class="h-16 w-16 rounded-md object-cover"
                                                        src="https://soklyphone.com/storage/Honor/Honor-X8c/marrs-green-1743995765whc8P.png"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Honor X8c</div>
                                                    <div class="text-sm text-gray-500">Color: Midnight Black</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            $149.99
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            1
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 flex items-center text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 w-fit">
                                                <span
                                                    class="w-2 h-2 rounded-full bg-blue-500 mr-1 animate-pulse"></span>
                                                <p>Shipped</p>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                                        </td>
                                    </tr>

                                    <!-- Item 2 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-16 w-16">
                                                    <img class="h-16 w-16 rounded-md object-cover"
                                                        src="https://soklyphone.com/storage/Apple/iphone/iPhone-16-16-Plus/teal-1726814145waTa2.png"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Iphone 16 Plus</div>
                                                    <div class="text-sm text-gray-500">Color: White</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            $29.99
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            1
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 flex items-center text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 w-fit">
                                                <span
                                                    class="w-2 h-2 rounded-full bg-blue-500 mr-1 animate-pulse"></span>
                                                <p>Shipped</p>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                                        </td>
                                    </tr>

                                    <!-- Item 3 -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-16 w-16">
                                                    <img class="h-16 w-16 rounded-md object-cover"
                                                        src="https://soklyphone.com/storage/Apple/iphone/iPhone-16-Pro-16-Pro-Max/desert-titanium-1726818848FBBCx.png"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Iphone 16 Pro Max
                                                    </div>
                                                    <div class="text-sm text-gray-500">Color: Navy Blue</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            $19.99
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            2
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 flex items-center text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 w-fit">
                                                <i class="fas fa-check-circle mr-1"></i>
                                                <p>Delivered</p>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="text-blue-600 hover:text-blue-900">View Details</button>
                                        </td>
                                    </tr>
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
<?php include('includes/footer.php')?>