<?php 
ob_start();
include('includes/header.php');
include('authication.php');
if($_SESSION['auth_user']){
    $user_id = $_SESSION['auth_user']['user_id'];
}
ob_end_flush();
?>
    <!-- start -->
    <div class="shopping-cart-block w-full p-3 sm:p-5 mt-10">
        <div class="head">
            <h1
                class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">
                Shopping Cart</h1>
            <div class="line w-full h-[2px] bg-[#144194] mt-3"></div>
        </div>

        <div class="cart-block w-full flex flex-col lg:flex-row justify-between mt-5">

            <!-- cart-box-noresponsive -->
            <div class="cart-box w-[100%] lg:w-[60%] border rounded-xl h-fit p-5 hidden md:block">
                <div class="box">
                    <!-- form of cart-box -->
                    <form action="" method="POST" class="w-full font-[Poppins,hanuman,Sans-serif] text-gray-700">

                        <!-- table of product-cart -->
                        <table class="" >
                            <?php
                             $get_cart = getProductUser("cart",$user_id);
                            if(mysqli_num_rows($get_cart) == 0){
                                ?>
                                <h1 class = "text-left font-[Poppins,hanuman,Sans-serif] text-sm md:text-[15px]"><i class="fa-solid fa-box-archive text-[#144194]"></i> Your cart is currently empty.</h1>
                                <?php
                            }else{
                                    ?>
                                    <thead class="">
                                        <tr class="font-normal">
                                            <td class="invisible"></td>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <?php
                                }
                            ?>
                            <tbody class="font-normal">
                               <?php
                               $totalPrice = 0;
                               $totalshipping = 0;
                                $get_cart = getProductUser("cart",$user_id);
                                if(mysqli_num_rows($get_cart) > 0){
                                  foreach($get_cart as $cart){
                                    $itemTotal = $cart['product_price'] * $cart['product_qty'];
                                    $shippingTotal = $itemTotal + $cart['total_price'];

                                    $totalPrice += $itemTotal;
                                    $totalshipping += $shippingTotal;
                                    ?>  
                                  <tr class="border-b-2" id = "mycart-<?= $cart['id']?>">
                                    <td><a href="#" id = "deleteProduct" data-cart = "<?= $cart['id']?>"><i class="fa-solid fa-xmark"></i></a></td>
                                    <td><a href="#"><img src="uploads/category/<?= $cart['product_image']?>" alt="Product Image"></a></td>
                                    <td><?= $cart['product_name'] ?></td>
                                    <td>
                                        <input type="number" id="inputValue" name = "update_qty" value = "<?= $cart['product_qty']?>" value="0" min="0" step="1" class="w-[70px] text-center border border-gray-300 rounded-lg">
                                        <input type="hidden" name="id" id = "cartId" value = "<?= $cart['id']?>">
                                    </td>
                                    <td>$<?= $cart['product_price']?></td>
                                    <td>$<?= number_format($itemTotal,2) ?></td>
                                  </tr>
                                    <?php
                                  }
                                }
                               ?>
                            </tbody>
                        </table>
                        <!-- <button class="mt-5 bg-red-500 text-white rounded-lg p-3 font-semibold"><a href="index.php">Back</a></button> -->
                    </form>
                </div>
            </div>

            <!-- cart-box-responsive -->
            <div class="cart-box w-[100%] lg:w-[60%] border rounded-xl h-fit p-5 mt-3 block md:hidden">
                <div class="box">
                    <!-- form of cart-box -->
                    <form action="" method="POST"
                        class="w-full font-semibold font-[Poppins,hanuman,Sans-serif] text-gray-700">
                        <!-- cart -->
                        <div class="cart w-full space-y-5 border-b-2 pb-3 text-sm">
                            <div class="flex justify-between w-full">
                                <label for="remove-product"></label>
                                <div><a href="#"><i class="fa-solid fa-xmark"></i></a></div>
                            </div>

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
                                <label for="remove-product"></label>
                                <div><a href="#"><i class="fa-solid fa-xmark"></i></a></div>
                            </div>

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
                                <div><input type="number" id="inputValue" value="0" min="0" step="1" class="w-[70px] text-center border border-gray-300 rounded-lg"></div>
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
            
            <!-- cart-total -->
            <?php
            $get_cart = getProductUser("cart",$user_id);
            if(mysqli_num_rows($get_cart) == 0){
                ?>
                
                <?php
            }else{
                ?>
                <div class="cart-total w-[100%] lg:w-[38%] h-fit mt-5 lg:mt-0 font-semibold font-[Poppins,hanuman,Sans-serif] p-5 border rounded-xl text-gray-700" style="border: 1px solid #d1d5db;">
                <h2 class="text-md md:text- font-bold mb-8">Cart Summary</h2>
                <div class="mb-8 flex justify-between text-sm md:text-[17px] font-normal">
                    <span>Subtotal:</span>
                    <span>$<?= number_format($totalPrice, 2) ?></span>
                </div>

                <form action="">
                <ul>
                    <li class="flex flex-col space-y-2 text-sm md:text-[17px] font-normal">
                        <span class="font-semibold">Shipping:</span>
                        <div class="mt-5 text-sm space-y-3">
                        <?php
                            $current_shipping_id = $cart['shipping_id'];
                            $shipping = getAll("shipping");
                            if($shipping->num_rows > 0){
                            foreach($shipping as $item){
                            ?>
                            <div class="flex items-center mt-3 space-x-1">
                                <input type="radio" name="shipping" value = "<?= $item['id'] ?>" id="shipping" class = 'shipping-radio'  <?= ($item['id'] == $current_shipping_id) ? 'checked' : ''?>>
                                <label for="shipping"><?= $item['shipping_option'] ?></label>
                            </div>
                            <?php
                            }
                            }
                        ?>
                        </div>
                    </li>
                </ul>

                <div class="mt-5 flex flex-col text-sm md:text-[17px] font-normal space-y-3">
                    <span>Calculate shipping</span>
                    <span class="w-100 h-[2px] bg-gray-600"></span>
                </div>

                <!-- sub-total -->
                <div class="flex justify-between text-sm md:text-[17px] font-normal mt-3">
                    <span class="font-semibold text-green-600">Subtotal:</span>
                    <span class="">
                        <?php
                            $get_shipping = getShipping1($current_shipping_id);
                            if($get_shipping->num_rows > 0){
                                $shippingData = $get_shipping->fetch_assoc();
                                $finalTotal = $totalPrice + $shippingData['shipping_price'];
                                echo '$' . number_format($finalTotal);
                            }
                        ?>
                    </span>
                </div>

                <div class="flex flex-col space-y-2 mt-5">
                    <button class="w-full hidden p-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-yellow-400 text-sm" id = "buttoncheckout">
                        <a href="payment.php"><i class="fa-solid fa-credit-card disabled"></i> Proceed to Checkout</a>
                    </button>
                    <button class="w-full p-3 bg-gray-200 text-gray-600 font-semibold rounded-md hover:bg-gray-300 text-sm">
                        <a href="index.php"><i class="fa-solid fa-cart-shopping"></i> Continue Shopping</a>
                    </button>
                </div>
            </div>
                <?php
            }
            ?>
            <!-- end cart -->
        </div>
    </div>
     <!-- end -->
    <!-- javascript -->
     <script src = "assets/script/custom.js"></script>
     <script>
        $(document).ready(function(){
            $("#shipping").on("change",function(){
                if($('#shipping:checked').length > 0){
                    $("#buttoncheckout").css("display","block");
                }
            });

            // if input already checked 
            if($('#shipping:checked').length > 0){
                $("#buttoncheckout").css("display","block");
            }
        });
     </script>
<?php include('includes/footer.php')?>