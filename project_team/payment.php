
<?php include('includes/header.php')?>
<div class="shopping-checkout-block w-full p-3 sm:p-5 mt-10">
        <div class="head">
            <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-2xl text-[#2e3192] shadow-black">
                CheckOut</h1>
            <div class="line w-full h-[2px] bg-[#144194] mt-3"></div>
        </div>
        <div class="cart-block w-full mt-5">
            <!-- cart-box-noresponsive -->
            <div class="w-full chechout-box">
                    <!-- Checkout form -->
                    <form action="" method="POST" class="w-full font-[Poppins,hanuman,Sans-serif] font-medium text-gray-700 flex flex-col lg:flex-row justify-between">

                        <div class="w-[100%] lg:w-[60%] h-fit p-5 rounded-xl border" style="border: 1px solid #d1d5db;">
                        <!-- Billing Information Section -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                          <div>
                            <label for="first-name" class="block text-gray-700">First Name</label>
                            <input type="text" id="first-name" name="first-name" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="Yorn">
                          </div>
                          <div>
                            <label for="last-name" class="block text-gray-700">Last Name</label>
                            <input type="text" id="last-name" name="last-name" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="Sam oun">
                          </div>
                        </div>
                    
                        <div class="mb-8">
                          <label for="email" class="block text-gray-700">Email Address</label>
                          <input type="email" id="email" name="email" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="mrounit83@gmail.com">
                        </div>
                    
                        <div class="mb-8">
                          <label for="address" class="block text-gray-700">Address</label>
                          <input type="text" id="address" name="address" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="123 Main Street">
                        </div>
                    
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                          <div>
                            <label for="city" class="block text-gray-700">City</label>
                            <input type="text" id="city" name="city" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="Svay Rieng">
                          </div>
                          <div>
                            <label for="zip" class="block text-gray-700">ZIP Code</label>
                            <input type="text" id="zip" name="zip" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="10001">
                          </div>
                        </div>
                    
                        <div class="mb-8">
                          <label for="country" class="block text-gray-700">Country</label>
                          <select id="country" name="country" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium bg-[#fff]">
                            <option value="cambodia">Cambodia</option>
                            <option value="thailand">Thailand</option>
                            <option value="china">china</option>
                            <!-- Add more countries here -->
                          </select>
                        </div>
                    
                        <!-- Payment Section -->
                        <h3 class="text-xl font-semibold mb-6 text-gray-800">Contact Information</h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                          <div>
                            <label for="phone-number" class="block text-gray-700">Phone Number</label>
                            <input type="text" id="phone-number" name="phone-number" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="0963904112">
                          </div>
                          <div>
                            <label for="telegram-number" class="block text-gray-700">Telegram Number</label>
                            <input type="text" id="telegram" name="telegram-number" class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium" placeholder="0963904112">
                          </div>
                        </div>
                        </div>

                        <!-- place-order -->
                       <div class="place-order w-[100%] lg:w-[38%] h-fit mt-5 lg:mt-0 font-semibold font-[Poppins,hanuman,Sans-serif] p-5 border rounded-xl text-gray-700 sticky top-[4rem]" style="border: 1px solid #d1d5db;">
                <h2 class="text-md md:text-md font-bold mb-6">Your Order Summary</h2>
              
                <!-- Order Table -->
                <div class="overflow-x-auto">
                  <table class="w-full table-auto text-sm text-gray-800 border-separate border-spacing-0">
                    <tbody>
                      <!-- Product 1 -->
                      <tr class="border-b border-gray-100 hover:bg-gray-50 text-sm md:text-[15px] font-normal">
                        <td class="py-4 px-4">Wireless Headphones</td>
                        <td class="py-4 px-4">2</td>
                        <td class="py-4 px-4 text-right">$120.00</td>
                        <td class="py-4 px-4 text-right">$240.00</td>
                      </tr>
                      <!-- Product 2 -->
                      <tr class="border-b border-gray-100 hover:bg-gray-50 text-sm md:text-[15px] font-normal">
                        <td class="py-4 px-4">Smart Watch</td>
                        <td class="py-4 px-4">1</td>
                        <td class="py-4 px-4 text-right">$250.00</td>
                        <td class="py-4 px-4 text-right">$250.00</td>
                      </tr>
                      <!-- Product 3 -->
                      <tr class="border-b border-gray-100 hover:bg-gray-50 text-sm md:text-[15px] font-normal">
                        <td class="py-4 px-4">Bluetooth Speaker</td>
                        <td class="py-4 px-4">3</td>
                        <td class="py-4 px-4 text-right">$45.00</td>
                        <td class="py-4 px-4 text-right">$135.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              
                <!-- Order Summary -->
                <div class="mt-6 flex justify-between items-center border-t border-gray-200 pt-4 text-sm">
                  <div class="space-y-3">
                    <p class="text-gray-700">Subtotal</p>
                    <p class="text-gray-700">Shipping</p>
                    <p class="text-gray-700">Tax</p>
                  </div>
                  <div class="text-right space-y-3">
                    <p class="font-semibold text-gray-900">$625.00</p> <!-- Subtotal -->
                    <p class="font-semibold text-gray-900">$15.00</p>   <!-- Shipping -->
                    <p class="font-semibold text-gray-900">$45.00</p>   <!-- Tax -->
                  </div>
                </div>
              
                <!-- Total Section -->
                <div class="mt-6 flex justify-between items-center text-lg md:text-xl font-medium">
                  <p class="text-gray-900">Total</p>
                  <p class="text-green-500">$685.00</p> <!-- Total amount -->
                </div>
              
                <!-- Checkout Button -->
                <div class="mt-6 text-center text-sm"  >
                  <button id = "checkout" data-modal-target="popup-modal" data-modal-toggle="popup-modal" type = "button" class="w-full py-3 px-5 bg-blue-500 text-white font-semibold rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400"  >
                    Proceed to Checkout
                  </button>
                </div>
                </div>
            </form>
            <!-- end -->
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <div class = "w-full h-[300px]">
                                <div class = "w-full h-[10%] flex justify-center items-center">
                                    <h1 class = "font-medium">Payment QR</h1>
                                </div>
                                <div class = "w-full h-[90%] bg-white flex justify-center items-center">
                                    <div class = "w-[70%] h-[50%] flex justify-center items-center">
                                      <canvas id="qrCodeCanvas" class = "w-full h-full" ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end -->
        </div>
        </div>
    </div>
    <!-- end of shopping-cart-block -->
<?php include('includes/footer.php')?>