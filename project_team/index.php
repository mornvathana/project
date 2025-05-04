<?php 
    include('includes/header.php');
?>
    <!-- end of main-slide -->
    <section class="main swiper mySwiper h-[30vh] sm:h-[60vh] md:h-[80vh] lg:h-[80vh] xl:h-[80vh] 2xl:h-[80vh]">
        <div class="wrapper swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="https://news.mynavi.jp/article/20181023-iphone_xs/ogp_images/ogp.jpg" alt="" class="image" />
            <div class="image-data">
              <h2 class="text-[30px] sm:text-[40px] md:text-[40px] lg:text-[45px] xl:text-[45px] 2xl:text-[45px]">
                Ipone 13 Pro Max <br />
              </h2>
              <!-- <a href="#" class="button">About Us</a> -->
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="https://i.pcmag.com/imagery/articles/07z4b4eQHimaZIemnRH39Tx-1.1569492276.fit_lim.size_1200x630.jpg" alt="" class="image" />
            <div class="image-data">
              <span class="text">We really like what we do.</span>
              <h2 class="text-[30px] sm:text-[40px] md:text-[40px] lg:text-[45px] xl:text-[45px] 2xl:text-[45px]">
                Coffee Beans with a <br />
                Perfect Aroma
              </h2>
              <!-- <a href="#" class="button">About Us</a> -->
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="https://th.bing.com/th/id/OIP.wiZZF8jA_2dvHD81R6NuNwHaE8?w=1200&h=800&rs=1&pid=ImgDetMain" alt="" class="image" />
            <div class="image-data">
              <span class="text">Making Our coffee with lover.</span>
              <h2 class="text-[30px] sm:text-[40px] md:text-[40px] lg:text-[45px] xl:text-[45px] 2xl:text-[45px]">
                Alluring and Fragrant <br />
                Coffee Aroma
              </h2>
              <!-- <a href="#" class="button">About Us</a> -->
            </div>
          </div>
        </div>
  
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </section>
    <!-- end of main-slide -->

    <!-- popular brand -->
    <div class="popular-brand mt-10 sm:mt-20 w-full">
        <div class="head w-full h-[50px]">
            <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[18px] sm:text-3xl text-gray-800 text-center" id="text"></h1>
        </div>
        <div class="popular-brand w-full grid grid-cols-4 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 xl:grid-cols-9 2xl:grid-cols-9 gap-3 px-5 sm:px-10 mt-0 sm:mt-10">
            <?php
                $image = getAll("brands");
                if($image->num_rows > 0){
                    foreach($image as $item){
                    ?>
                        <a href="products.php?id=<?= $item['id'] ?>"><img src="uploads/brand/<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="w-full shadow-md rounded-xl overflow-hidden"></a>
                    <?php
                    }
                }
            ?>
        </div>
    </div>
    <!-- end of popular brand -->

    <!-- text-slide -->
    <div class="text-slide w-full mt-10 md:mt-20">
        <marquee behavior="" direction=""
            class="w-full font-bold font-[Montserrat,hanuman,Sans-serif] text-[10px] sm:text-[15px] md:text-lg lg:text-lg xl:text-xl 2xl:text-xl text-[#fff] shadow-black bg-[#135AB4] p-5">
            Now we have 2 Official Facebook Page, please help like and follow our page to get latest update of product
            information. "Angkor Meas Phone Shop in Cambodia" "Angkor Meas Mobile"</marquee>
    </div>
    <!-- end text-slide -->

    <!-- popular-product -->
    <div class="popular-product mt-10 md:mt-20 w-full">
        <div class="head p-3 sm:p-5">
            <h1
                class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">
                FEATURED PRODUCTS</h1>
            <h3
                class="font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium mt-2">
                Most popular products recommended to you</h3>
        </div>
        <!-- product-box -->
        <div
            class="product-box w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-3 p-1 sm:p-5">
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Galaxy Ring Silver (Size10)</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Huawei Mate XT Ultimate (Chinese Version)</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Samsung Galaxy Watch 7 41mm (In Stock)</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Mini-7/blue-1732616451VzJsr.png" alt=""
                            class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Huawei MatePad Pro 12.2″ (OFF: 40$+Big Gift $800+)</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Galaxy Tab S10 Ultra 256G Only Wifi(In Stock) Only Wifi</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://angkormeas.com/wp-content/uploads/2024/09/Galaxy-Z-Fold6_Oct-300x300.jpg?v=1730213161"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://angkormeas.com/wp-content/uploads/2024/07/Galaxy-Watch7_v2-300x300.jpg?v=1729850638"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>

        </div>
        <!-- end of product-box -->
    </div>
    <!-- end popular-product -->

    <!-- new-arrival -->
    <div class="new-arrival mt-10 md:mt-20 w-full">
        <div class="arrival w-[100%]">
            <div
                class="flex flex-col lg:flex-row justify-start lg:justify-between items-start lg:items-center w-full p-3 sm:p-5">
                <div class="">
                    <h1
                        class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">
                        NEW PRODUCT</h1>
                    <h3
                        class="font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium mt-2">
                        New products recommended to you</h3>
                </div>
                <ul class="page-menu flex items-center gap-[8px] sm:gap-[13px] md:space-y-0 md:text-xl mt-5 lg:mt-0 font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium"
                    style="flex-wrap: wrap;">
                    <li class="active" style="background-color: #dddfe4; border-radius: 20px; padding: 5px 20px;">All</li>
                    <li class="" style="background-color: #dddfe4; border-radius: 20px; padding: 5px 20px;">Mobile</li>
                    <li class="" style="background-color: #dddfe4; border-radius: 20px; padding: 5px 20px;">Tablet</li>
                    <li class="" style="background-color: #dddfe4; border-radius: 20px; padding: 5px 20px;">Watch</li>
                    <li class="" style="background-color: #dddfe4; border-radius: 20px; padding: 5px 20px;">Laptop</li>
                    <li class="" style="background-color: #dddfe4; border-radius: 20px; padding: 5px 20px;">Accessories</li>
                </ul>
            </div>

            <div class="product-box page hidden active all w-full grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-3 p-1 sm:p-5"
                page="all">

                <!-- box -->
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16pro.max_.gold_-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16pro.natural-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.plus_.green_-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.blue_-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/04/12.9inch.grey-2_20240425_180232_0015-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2022/11/airpods.pro_.2.c_20231211_124214_0004-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>

            </div>
            <!-- all-product -->

            <div class="page hidden mobile w-full grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-3 p-1 sm:p-5"
                page="mobile">

                <!-- box -->
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16pro.max_.gold_-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16pro.natural-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.plus_.green_-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.blue_-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2024/04/12.9inch.grey-2_20240425_180232_0015-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://shunliphone.com/wp-content/uploads/2022/11/airpods.pro_.2.c_20231211_124214_0004-300x300.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
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
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>

            </div>
            <!-- mobile-box -->


            <div class="page hidden tablet w-full grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-3 sm:gap-5 mt-8"
                page="tablet">

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Apple/iPad/iPad-Pro-2024-M4/Silver/silver-1-1716362954WuilY.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- tablet-box -->

            <div class="page hidden watch w-full grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-3 sm:gap-5 mt-8"
                page="watch">

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/SAMSUNG/Smart_Watch/Galaxy-Fit3/pink-gold-1723693369VydXN.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- watch-box -->

            <div class="page hidden laptop w-full grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-3 sm:gap-5 mt-8"
                page="laptop">

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Huawei/Computer_Huawei/B-3-HUAWEI-MateBook-B3-2024/1-1714468269h8TeF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- laptop-box -->

            <div class="page hidden accessories w-full grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-3 sm:gap-5 mt-8"
                page="accessories">

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="box w-full h-[300px] overflow-hidden border p-3 shadow-md rounded-md relative bg-[#fff]">
                    <a href="#">
                        <div class="thumnail w-full h-[130px] flex justify-center">
                            <img src="https://soklyphone.com/storage/Accessories/SONY/Sony-ULT-FIELD-1-Wireless-Portable-Speaker/black-1-1724148981qBJCF.png"
                                alt="" class="w-[50%] h-full">
                        </div>

                        <div class="tittle translate-y-[60px]">
                            <div class="name-pro font-medium text-xl text-gray-800 max-h-[55px] overflow-hidden">iPad
                                Pro 13″ Wi-Fi 2024</div>
                            <div class="price flex justify-between items-center mt-3 max-h-[30px] overflow-hidden">
                                <div class="dis-price text-[#f34770] text-lg font-semibold">$1,459.00</div>
                                <del class="full-price font-semibold text-gray-800">$1,379.00</del>
                            </div>
                            <div class="btn mt-8">
                                <button class="bg-[#1f9150] p-[8px] text-white font-normal rounded-md"><i
                                        class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- accessories-box -->


        </div>
    </div>

    <!-- oppo-product -->
    <div class="oppo-product mt-5 md:mt-10 w-full">
        <div class="head p-3 sm:p-5">
            <h1
                class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">
                OPPO BRANDS</h1>
            <h3
                class="font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium mt-2">
                Most popular products recommended to you</h3>
        </div>

        <!-- product-box -->
        <div
            class="product-box w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-3 p-1 sm:p-5">
            <!-- box -->
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/Oppo/OPPO-Find-X8-Pro/black-1-1732595168pJVUp.png"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/Oppo/Oppo-Find-X8/gray-1-1732593391BbNxS.png" alt=""
                            class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/Oppo/Oppo-A3/purple-1726915483jtIkk.png" alt=""
                            class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/Oppo/Oppo-Reno7-Pro-5G/silver-2-1655518398mcJU5.png"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/Oppo/Oppo-Find-N-2-Flip/profile-16736782712umcf.jpg"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/Oppo/Oppo-Find-N2/oppo-find-n2-white-1672285472ucBSX.jpg"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>

        </div>
        <!-- end of product-box -->

        <!-- see-more-btn -->
        <div class="see-more-btn w-full p-5 sm:p-5 flex justify-end mt-0 sm:mt-0">
            <button
                class="font-[Montserrat,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-[#2e3192] font-semibold"><a
                    href="#">
                    SEE MORE
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a></button>
        </div>
    </div>
    <!-- end oppo-product -->

    <!-- vivo-product -->
    <div class="vivo-product mt-5 md:mt-10 w-full">
        <div class="head p-3 sm:p-5">
            <h1
                class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">
                VIVO BRANDS</h1>
            <h3
                class="font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium mt-2">
                Most popular products recommended to you</h3>
        </div>

        <!-- product-box -->
        <div
            class="product-box w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-3 p-1 sm:p-5">
            <!-- box -->
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/VIVO/vivo-x-200-pro-global/titanium-grey-1-17333739994VBPB.png"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/VIVO/vivo-V40-Lite/titanium-silver-1729245065hGDAt.png"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/VIVO/Vivo-V40-5G/peach-1729242898wJPOq.png" alt=""
                            class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/VIVO/vivo-Y33s/blur-1675393493ohenf.jpg" alt=""
                            class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/VIVO/vivo-Y35/vivo-y35-1675396565lRAg5.jpg" alt=""
                            class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>
            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="#" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="https://soklyphone.com/storage/VIVO/vivo-v25-5g/v25-5g-gold-1662626483drFnI.png"
                            alt="" class="w-full">
                    </div>
                    <div
                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$999</del>
                        <div class="full-price text-[#f34770!important]">$1,155</div>
                    </div>
                    <div
                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                        Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                    <button
                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
            </div>

        </div>
        <!-- end of product-box -->

        <!-- see-more-btn -->
        <div class="see-more-btn w-full p-5 sm:p-5 flex justify-end mt-0 sm:mt-0">
            <button
                class="font-[Montserrat,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-[#2e3192] font-semibold"><a
                    href="#">
                    SEE MORE
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a></button>
        </div>
    </div>
    <!-- end vivo-product -->

    <!-- secondhand-product -->
    <div class="secondhand-product mt-5 md:mt-10 w-full bg-[#144194]">
        <div class="head p-3 sm:p-5">
            <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#fff] shadow-black">
                SECONDHAND BRANDS</h1>
            <h3
                class="font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-[#fff] font-medium mt-2">
                Find products affordable price, for those who want quality with the best prices</h3>
        </div>

        <!-- product-box -->
        <div class="product-box w-full p-3 sm:p-5">
            <div
                class="bg-[#fff] grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-3 rounded-md overflow-hidden">
                <!-- box -->
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Photos/Samsung/Mobile-Phone/flip-6/flip6-512-yellow-790/1-1733220813eDpYk.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Photos/Samsung/Mobile-Phone/fold-6/Silver-shadow-512-1150/1-1733566062LsBAC.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Camko/Huawei/Tablet/huawei-matepad-11-5-s-256-380/1-1733554840j9A19.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-KK/Samsung/Mobile-Phone/galaxy-z-fold-5-thom-browne-edition-12-512-gb-k/1-1725691786eTXYx.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-PH/Xiaomi/Xiaomi-Poco-x-6-pro-12-512-gb-black-global/1-1733287163HTOe8.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-KK/Huawei/Tablet/huawei-matepad-air-256-390/2-1733563580LXaOc.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>

                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Photos/Huawei/Tablet/huawei-matepad-air-450/1-1733281633OJevt.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Anker Power Bank 20,000mAh, 22.5W Cable built-in (In Stock) hyuuuuuuuuuuuu</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Camko/Honor/Honor-x8b-512-green/1-1733553349zK6Rv.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Photos/Huawei/Tablet/huawei-mate-pad-pro-11-2022-8-256-gb-black/1-1724731478QDUi2.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Photos/Samsung/Mobile-Phone/S24-plus/1-1726210273bynBr.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-Photos/Samsung/Mobile-Phone/A15/Black-8-128/galaxy-a15-black-8-128-1730866822C0MTO.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="https://soklyphone.com/storage/2nd-KK/Samsung/Mobile-Phone/S24-plus/purple-1-1720760519YaDEK.png"
                                alt="" class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$999</del>
                            <div class="full-price text-[#f34770!important]">$1,155</div>
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                            Used Galaxy Z Fold 6 256G+12G (99%) Global</div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        <div class="line"></div>
                    </a>
                </div>
            </div>

        </div>
        <!-- end of product-box -->

        <!-- see-more-btn -->
        <div class="see-more-btn w-full p-5 sm:p-5 flex justify-end mt-0 sm:mt-0">
            <button
                class="font-[Montserrat,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-[#fff] font-semibold"><a
                    href="#">
                    SEE MORE
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a></button>
        </div>
    </div>
    <!-- end secondhand-product -->
    
    <!-- banner -->
    <div class="banner w-full grid grid-cols-1 md:grid-cols-4 gap-3 mt-10 p-3 sm:p-5">
    <div class="box w-full">
        <img src="https://angkormeas.com/wp-content/uploads/2023/10/iPhone-15-Pro-Max.webp" alt="">
    </div>
    <div class="box w-full">
        <img src="https://angkormeas.com/wp-content/uploads/2023/10/Galaxy-S24-Ultra-1.webp" alt="">
    </div>
    <div class="box w-full">
        <img src="https://angkormeas.com/wp-content/uploads/2023/10/iPad-Pro-11-M4.webp" alt="">
    </div>
    <div class="box w-full">
        <img src="https://angkormeas.com/wp-content/uploads/2023/10/iPad-Pro-11-M4.webp" alt="">
    </div>
    </div>
    <!-- end of banner -->
<?php include('includes/footer.php')?>
