<?php include('includes/header.php')?>
<div class="shopping-checkout-block w-full p-3 sm:p-5 mt-10">
        <div class="head">
            <h1
                class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-2xl text-[#2e3192] shadow-black">
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
                  <a href = "#" class="w-full py-3 px-5 bg-blue-500 text-white font-semibold rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400" id="checkout_button" >
                    Proceed to Checkout
                  </a>
                </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    <!-- start aba form -->
    <!— Popup Checkout Form —>
			<div id="aba_main_modal" class="aba-modal">
				<!— Modal content —>
				<div class="aba-modal-content">

					<!-- Include PHP class -->
					<?php
						require_once 'PayWayApiCheckout.php';
                      $item [0]['name'] = 'test1';
                      $item [0]['quantity'] = '1';
                      $item [0]['price'] = '1';
                      $item [1]['name'] = 'test2';
                      $item [1]['quantity'] = '1';
                      $item [1]['price'] = '1';

                      $items = base64_encode(json_encode($item));

                      $req_time = time();
                      $merchant_id = "ec439287";
                      $transactionId = time();
                      $amount = '0.01';
                      $firstName = 'Makara';
                      $lastName = 'Prom';
                      $phone = '093630466';
                      $email = 'prom.makara@ababank.com';
                      $return_params = "Hello World!";
                      $payment_option = "abapay";
                      $currency = "USD";
                      $shipping = '2';
                      $continue_success_url = "https://domain.gov.kh/buydomain/PurchasThank";
                      $type = "purchase";
					?>

					<form method="POST" target="aba_webservice" action="<?php echo PayWayApiCheckout::getApiUrl(); ?>" id="aba_merchant_request">
						<input type="hidden" name="hash" value="<?php echo PayWayApiCheckout::getHash($req_time . ABA_PAYWAY_MERCHANT_ID . $transactionId . $amount . $items . $shipping . $firstName . $lastName . $email . $phone . $type . $payment_option . $currency .$return_params); ?>" id="hash"/>
						<input type="hidden" name="tran_id" value="<?php echo $transactionId; ?>" id="tran_id"/>
						<input type="hidden" name="amount" value="<?php echo $amount; ?>" id="amount"/>
						<input type="hidden" name="items" value="<?php echo $items; ?>" id="items">
						<input type="hidden" name="shipping" value="<?php echo $shipping; ?>"/>
						<input type="hidden" name="firstname" value="<?php echo $firstName; ?>"/>
						<input type="hidden" name="lastname" value="<?php echo $lastName; ?>"/>
						<input type="hidden" name="email" value="<?php echo $email; ?>"/>
						<input type="hidden" name="phone" value="<?php echo $phone; ?>"/>
						<input type="hidden" name="type" value="<?php echo $type; ?>"/>
						<input type="hidden" name="payment_option" value="<?php echo $payment_option;?>"/>
						<input type="hidden" name="currency" value = "<?php echo $currency; ?>">
            <input type="hidden" name="return_params" value="<?php echo $return_params; ?>"/>
						<input type="hidden" name="merchant_id" value="<?php echo $merchant_id; ?>"/>
            <input type="hidden" name="req_time" value="<?php echo $req_time; ?>"/>
            </form>
				</div>
				<!— end Modal content—>
			</div>
		<!— End Popup Checkout Form —>
    <!-- end aba form -->
    <!-- end of shopping-cart-block -->
<?php include('includes/footer.php')?>