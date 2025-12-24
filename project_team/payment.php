
<?php 
 ob_start();
include('includes/header.php');
include('authication.php');
if($_SESSION['auth_user']){
  $user_id = $_SESSION['auth_user']['user_id'];
}
?>
<div class="shopping-checkout-block w-full p-3 sm:p-5 mt-10">
        <div class="head flex justify-between items-center">
            <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-2xl text-[#2e3192] shadow-black">CheckOut</h1>
            <div class = "w-[400px] flex">
            <div class = "w-[20%] h-full">

            </div>
            <div class = "w-[40%] h-full flex justify-center items-center flex-col relative">
                <div class = "w-[50px] h-[50px] text-white font-medium bg-green-500 rounded-full flex justify-center items-center">
                  1
                </div>
                <div class = "w-full h-[100%] text-center">
                  <p class = "text-sm font-bold">information</p>
                </div>
                <div class = "absolute w-[62px] h-[10px] right-0 top-[32%] p-1 bg-green-500 "></div>
            </div>
              <div class = "w-[40%] h-full flex justify-center items-center flex-col relative">
                  <div id = "boxColor" class = "w-[50px] text-white font-medium h-[50px] bg-red-500 rounded-full flex justify-center items-center">
                    2
                  </div>
                  <div class = "w-full h-[100%] text-center">
                    <p class = "text-sm font-bold">Payment</p>
                  </div>
                  <div class = "absolute w-[57px] h-[10px] left-0 top-[32%] p-1 bg-green-500 hidden" id = "addLine"></div>
              </div>
          </div>
        </div>
        <div class="line w-full h-[2px] bg-[#144194] mt-3"></div>
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

                        <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 mb-8">
                            <div>
                              <label for="city" class="block text-gray-700">Shipping Method</label>
                              <select id = "shippingMethod" class = "mt-2 p-2 md:p-2 w-full border border-gray-300 rounded-md font-medium">
                                <option value = "" select >Select shipping Method</option>
                                <option value = "J&T">J&T</option>
                                <option value = "Virak Buntham">Virak Buntham</option>
                              </select>
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
                        <input type="hidden" name="cart_id" class = "cart_id" value = "<?= $product['id']?>">
                        <input type="hidden" name="productid" id = "productid" value = "<?= $product['category_id']?>">
                        <!-- end user_id and cart_id -->
                        <td class="py-4 px-4"><?= $product['product_qty'] ?></td>
                        <td class="py-4 px-4 text-right" >$<?= $product['product_price'] ?></td>
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
                            $itemTotal += $cart['product_price'];
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
                    </p>  
                  </div>
                </div>
                <!--  -->
                 <div class = "w-full h-[20px] my-2">
                   <p class="text-gray-700 text-sm">Discount Coupon</p>
                </div>
                <div class = "w-full h-[40px] my-2">
                    <from class = "w-full h-full grid grid-cols-[1fr_50px] gap-2">
                      <input type = "text" id = "discode" class = "border-[2px] rounded-md border-gray-500 pl-2">
                      <button class = "text-sm flex justify-center items-center text-white rounded-md "><span id = "discounticon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#2196f3" stroke-dasharray="50.2655 50.2655" fill="none" stroke-linecap="round">
                          <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"/>
                        </circle>
                      </svg></span>
                    </button>
                    </from>
                </div>
                <!-- Total Section -->
                <div class="mt-6 flex justify-between items-center text-lg md:text-xl font-medium">
                  <p class="text-gray-900">Total</p>
                  <p class="text-green-500" id = "totalPrice">
                  <?php
                      $get_shipping = getShipping1($shipping_id);
                      if($get_shipping->num_rows > 0){
                          $shippingData = $get_shipping->fetch_assoc();
                          $finalTotal = $itemTotal + $shippingData['shipping_price'];
                          echo '$' . number_format($finalTotal,2);
                      }
                  ?>
                  </p> <!-- Total amount -->
                </div>
              
                <!-- Checkout Button -->
                <div class="mt-6 text-center text-sm"  >
                  <button id = "checkout" data-total = "<?= $finalTotal ?>" data-modal-target="qrCodeModal" data-modal-toggle="qrCodeModal" type = "button" class="w-full py-3 px-5 bg-blue-500 text-white font-semibold rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 hidden focus:ring-orange-400 "  >
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
                  <!--  -->
                  <div class = "w-full h-[40px] flex justify-center items-center">
                      <div class = "w-[70%] h-full bg-red-500 flex justify-center items-center rounded-tl-[10px] rounded-tr-[10px]">
                        <p class = "font-bold text-white">KHQR</p>
                      </div>
                  </div>
                  <div class = "w-full my-[1px] flex justify-center items-center">
                      <div class = "w-[70%] h-full flex justify-center items-center">
                        <p class = "">Morn sovathana</p>
                      </div>
                  </div>
                  <div class = "w-full my-[1px] flex justify-center items-center">
                      <div class = "w-[70%] h-full flex justify-center items-center">
                        <p class = "" id = "showPrice"></p>
                      </div>
                  </div>
                  <!--  -->
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
    <script>
      $(document).ready(function(){

       const totalBill = <?= $finalTotal ?>;
       let finalPrice = 0;

       $(document).on("keyup","#discode",function(e){

        e.preventDefault();

        const totalPrice = $(this).val().trim();

        const discounticon = $("#discounticon");
        
        $.ajax({
          method: "POST",
          url: "action/discount.php",
          data: {
            "code" : totalPrice,
          },
          dataType: "json",
          beforeSend: function(){
            discounticon.html(``);
          },
          success: function (data) {
            if(data.length > 0){
              let txt = "";
              for(i in data){
                let item = data[i];
                txt += `${item.discode}`;
              }
              
               finalPrice = totalBill - (totalBill * (txt / 100));
                discounticon.html(`<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                      <path fill="#c8e6c9" d="M36,42H12c-3.314,0-6-2.686-6-6V12c0-3.314,2.686-6,6-6h24c3.314,0,6,2.686,6,6v24C42,39.314,39.314,42,36,42z"></path><path fill="#4caf50" d="M34.585 14.586L21.014 28.172 15.413 22.584 12.587 25.416 21.019 33.828 37.415 17.414z"></path>
                      </svg>`);
              $("#checkout").attr("data-total",finalPrice);
              $("#discode").prop("readonly",true);
              $("#totalPrice").html(`$${finalPrice}`)
            }else{
              discounticon.html(` <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" fill="#ffcdd2"/>
                                <path d="M5 5 L19 19" stroke="#f44336" stroke-width="2"/>
                                <path d="M19 5 L5 19" stroke="#f44336" stroke-width="2"/>
                              </svg>`);
            }
          }
        });


       });
        
      });
    </script>
    <script src = "assets/script/khqr.js"></script>
    <!-- end of shopping-cart-block -->
<?php include('includes/footer.php')?>