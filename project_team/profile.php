<?php include('includes/header.php')?>
<div class="profile-block w-[90%] mx-auto mt-10 flex flex-col md:flex-row justify-between relative">
        <!-- menu -->
        <div class="menu w-[100%] md:w-[30%] h-fit sticky top-[4rem]" style="border: 1px solid #d2d3d4; border-radius: 10px;">
            <ul class="space-y-3 font-medium text-[15px] p-5 font-[Poppins,hanuman,Sans-serif] text-gray-800" id="righ_button">
                <li class="active"><a href="#"><i class="fa-regular fa-user"></i> Profile</a></li>
                <li class=""><a href="#"><i class="fa-solid fa-cart-shopping"></i> My Orders</a></li>
                <li class=""><a href="#"><i class="fa-solid fa-heart"></i> My Favorites</a></li>
                <li class=""><a href="#"><i class="fa-solid fa-truck"></i> Order Tracking</a></li>
            </ul>
        </div>
        
        <div class="all-page w-[100%] md:w-[68%]">
        <!-- profile-page -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0" style="border: 1px solid #d2d3d4; border-radius: 10px;" name="profile">
            <div class="text-[20px] font-semibold">
                <h1 class="text-green-900 font-[Montserrat,hanuman,Sans-serif] font-bold">My Profile</h1>
                <div class="line w-[13%] bg-gray-500 h-[2px] rounded-md mt-1"></div>
                <div class="mt-5">
                <img src="https://th.bing.com/th/id/OIP.aSf3G-F6Q5cp21tveGCIDAHaHY?rs=1&pid=ImgDetMain" alt="" class="w-[100px] h-[100px] rounded-full" style="border: 1px solid #d2d3d4;">
                <form id="myForm" class="space-y-4">
                    <!-- Input 1 -->
                    <div>
                      <label for="input1" class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Username</label>
                      <input type="text" id="input1" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 font-medium text-gray-800" disabled placeholder="Heaoun" value="Heaoun"/>
                    </div>
                
                    <!-- Input 2 -->
                    <div>
                      <label for="input2" class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Email</label>
                      <input type="text" id="input2" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 font-medium text-gray-800" disabled placeholder="Heaoun@gmail.com" value="Heaoun@gmail.com"/>
                    </div>
                
                    <!-- Password Fields -->
                    <div id="passwordFields" class="hidden">
                      <div>
                          <label for="password" class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Old Password</label>
                          <input type="password" id="password" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"/>
                      </div>
          
                      <div>
                        <label for="password" class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">New Password</label>
                        <input type="password" id="password" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"/>
                      </div>
                
                      <div>
                        <label for="verifyPassword" class="block text-[15px] text-gray-700 font-medium font-[Montserrat,hanuman,Sans-serif]">Verify Password</label>
                        <input type="password" id="verifyPassword" class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"/>
                      </div>
                    </div>
                
                    <!-- Action Buttons -->
                    <div class="flex">
                      <!-- Edit Button -->
                      <button id="editBtn" type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md text-[15px]" onclick="editMode()"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                      
                      <!-- Update Button -->
                      <button id="updateBtn" type="submit" class="hidden px-4 py-2 bg-green-500 text-white rounded-md text-[15px]" onclick="updateMode()"><i class="fa-solid fa-floppy-disk"></i> Update</button>

                      <!-- Cancel Button -->
                      <a href = "logout.php" id="logoutBtn" type="button" class="px-4 py-2 bg-red-500 text-white rounded-md text-[15px] ml-2"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                    </div>
                  </form>
                </div>
            </div>
        </div>

        <!-- orders-page -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;" name="orders">
            <div class="">
                <h1 class="text-green-900 font-[Montserrat,hanuman,Sans-serif] text-[20px] font-bold">My Orders</h1>
                <div class="line w-[13%] bg-gray-500 h-[2px] rounded-md mt-1"></div>

                <!-- order-box-noresponsive -->
                <div class="order-box w-[100%] h-fit hidden md:block">
                <div class="box">
                    <!-- form of cart-box -->
                    <form action="" method="POST" class="w-full font-[Poppins,hanuman,Sans-serif] text-gray-700 mt-5">

                        <!-- table of product-cart -->
                        <table class="">
                            <!-- <thead class="">
                                <tr class="font-normal text-md">
                                    <td class="invisible"></td>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead> -->
                            <tbody class="font-normal">
                                <tr class="border-b-2">
                                    <td><a href="#"><img
                                                src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.plus_.green_-300x300.png"
                                                alt="Product Image"></a></td>
                                    <td>iPhone 16 Plus – Non active</td>
                                    <td>$1000</td>
                                    <td><input type="number" id="inputValue" value="0" min="0" step="1"
                                            class="w-[70px] text-center border border-gray-300 rounded-lg" disabled></td>
                                    <td>$2000</td>
                                </tr>
                                <tr class="border-b-2">
                                    <td><a href="#"><img
                                                src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16pro.max_.gold_-300x300.png"
                                                alt="Product Image"></a></td>
                                    <td>iPhone 16 Pro Max ធានា១ឆ្នាំ</td>
                                    <td>$15.00</td>
                                    <td><input type="number" id="inputValue" value="0" min="0" step="1"
                                            class="w-[70px] text-center border border-gray-300 rounded-lg" disabled></td>
                                    <td>$15.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="mt-5 bg-blue-500 text-white rounded-lg p-2 font-semibold text-sm"><a href="#"><i
                                    class="fa-regular fa-pen-to-square"></i> Shopping</a></button>
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

        </div>
    </div>
<?php include('includes/footer.php')?>