
<?php 
include('includes/header.php');
if($_SESSION['auth_user']){
  $user_id = $_SESSION['auth_user']['user_id'];
}
?>
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
                    <form
                        id="checkoutForm"
                        method="POST"
                        class="w-full font-[Poppins,hanuman,Sans-serif] font-medium text-gray-700 flex flex-col lg:flex-row justify-between"
                      >
                        <div class="w-[100%] lg:w-[60%] h-fit p-5 rounded-xl border" style="border: 1px solid #d1d5db;">
                          <!-- Billing Information Section -->
                          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                            <div>
                              <label for="first-name" class="block text-gray-700">First Name</label>
                              <input
                                type="text"
                                id="first-name"
                                name="first-name"
                                class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium"
                                placeholder="First Name"
                                required
                              />
                            </div>
                            <div>
                              <label for="last-name" class="block text-gray-700">Last Name</label>
                              <input
                                type="text"
                                id="last-name"
                                name="last-name"
                                class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium"
                                placeholder="Last Name"
                                required
                              />
                            </div>
                          </div>
                          
                          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                            <div>
                              <label for="city" class="block text-gray-700">City</label>
                              <input
                                type="text"
                                id="city"
                                name="city"
                                class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium"
                                placeholder="City"
                                required
                              />
                            </div>
                            <div class="mb-8">
                              <label for="address" class="block text-gray-700">Address</label>
                              <input
                                type="text"
                                id="address"
                                name="address"
                                class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium"
                                placeholder="Address"
                                required
                              />
                            </div>
                          </div>

                          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                            <div>
                              <label for="email" class="block text-gray-700">Email</label>
                              <input
                                type="email"
                                id="email"
                                name="email"
                                class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium"
                                placeholder="Email"
                                required
                              />
                            </div>
                            <div class="mb-8">
                              <label for="phone-number" class="block text-gray-700">Phone</label>
                              <input
                                type="tel"
                                id="phone-number"
                                name="phone-number"
                                class="mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium"
                                placeholder="Phone"
                                required
                              />
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
                      <?php
                      $get_cart = getProductUser("cart",$user_id);
                      if($get_cart->num_rows > 0){
                        foreach($get_cart as $product){
                        ?>
                        <tr class="border-b border-gray-100 hover:bg-gray-50 text-sm md:text-[15px] font-normal">
                        <td class="py-4 px-4"><?= $product['product_name'] ?></td>
                        <!-- user_id -->
                        <input type="hidden" name="user_id" id= "user_id" value = "<?= $user_id?>">
                        <input type="hidden" name="cart_id" id = "cart_id" value = "<?= $product['id']?>">
                        <!-- end user_id and cart_id -->
                        <td class="py-4 px-4"><?= $product['product_qty'] ?></td>
                        <td class="py-4 px-4 text-right">$<?= $product['product_price'] ?></td>
                        </tr>
                        <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              
                <!-- Order Summary -->
                <div class="mt-6 flex justify-between items-center border-t border-gray-200 pt-4 text-sm">
                  <div class="space-y-3">
                    <p class="text-gray-700">Subtotal</p>
                    <p class="text-gray-700">Shipping</p>
                  </div>
                  <div class="text-right space-y-3">
                    <p class="font-semibold text-gray-900">
                      <?php
                         $itemTotal = 0;
                         $shipping_id = 0;
                         $get_cart = getProductUser("cart",$user_id);
                         if(mysqli_num_rows($get_cart) > 0){
                          foreach($get_cart as $cart){
                            $itemTotal = $cart['product_price'] * $cart['product_qty'];
                            $shipping_id = $cart['shipping_id'];
                          }
                          ?>
                          $<?= $itemTotal?>
                          <?php
                         }
                      ?>
                    </p> <!-- Subtotal -->
                    <p class="font-semibold text-gray-900">
                      <?php
                        $shipping = getShipping($shipping_id);
                        if($shipping->num_rows > 0){
                          $price = $shipping->fetch_assoc();
                          ?>
                          $<?= $price['shipping_price'] ?>
                          <?php
                        }

                      ?>
                    </p>   <!-- Shipping -->
                  </div>
                </div>
              
                <!-- Total Section -->
                <div class="mt-6 flex justify-between items-center text-lg md:text-xl font-medium">
                  <p class="text-gray-900">Total</p>
                  <p class="text-green-500">
                  <?php
                      $get_shipping = getShipping1($shipping_id);
                      if($get_shipping->num_rows > 0){
                          $shippingData = $get_shipping->fetch_assoc();
                          $finalTotal = $itemTotal + $shippingData['shipping_price'];
                          echo '$' . number_format($finalTotal);
                      }
                  ?>
                  </p> <!-- Total amount -->
                </div>
              
                <!-- Checkout Button -->
                <div class="mt-6 text-center text-sm"  >
                  <button id = "checkout" data-total = "<?= $finalTotal ?>" data-modal-target="qrCodeModal" data-modal-toggle="qrCodeModal" type = "button" class="w-full hidden py-3 px-5 bg-blue-500 text-white font-semibold rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400"  >
                    Proceed to Checkout
                  </button>
                </div>
                </div>
            </form>
            <!-- start popup -->
             <div id="qrCodeModal" tabindex="-1" aria-hidden="true"
              class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
              <div class="relative w-full h-full max-w-md md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Payment QR
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                      data-modal-hide="qrCodeModal">
                      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6 text-center">
                    <canvas id="qrCodeCanvas" class="mx-auto"></canvas>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="qrCodeModal" type="button"
                      class="text-white bg-gray-500 hover:bg-gray-600 font-medium rounded-lg text-sm px-5 py-2.5">
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end popup -->
        </div>
        </div>
    </div>
    <script src="https://github.com/davidhuotkeo/bakong-khqr/releases/download/bakong-khqr-1.0.6/khqr-1.0.6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <script src = "assets/script/khqr.js"></script>
    <!-- end of shopping-cart-block -->
<?php include('includes/footer.php')?>