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

    <!-- popular-product -->
            <!-- box -->
            <?php
                $item = getPopularProduct("popular_pd",1);
                if($item->num_rows > 0){
                    foreach($item as $data){
                    ?>
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
                    <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                        <a href="viewdetail.php?id=<?= $data['id']?>" class="flex flex-col items-center space-y-2 w-full">
                            <div class="pro-img w-full overflow-hidden rounded-md">
                                <img src="uploads/category/<?= $data['image'] ?>"
                                    alt="" class="w-full">
                            </div>
                            <div
                                class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                                <del class="dis-price opacity-50">$<?= $data['sell_price'] ?></del>
                                <div class="full-price text-[#f34770!important]">$<?= $data['original_price'] ?></div>
                            </div>
                            <div
                                class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                                <?= $data['description'] ?></div>
                            <button
                                class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                    class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                            <div class="line"></div>
                        </a>
                    </div>
                    <?php
                    }
                }
            ?>
        <!-- end of product-box -->
    </div>
    <!-- end popular-product -->

    <!-- new-arrival -->
    <?php
        $item = getPopularProduct("new_pd",1);
        if($item->num_rows > 0){
            foreach($item as $data){
            ?>
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

                                <?php
                                    $menu = getAll("product");
                                    if($menu->num_rows > 0){
                                        foreach($menu as $name){
                                        ?>
                                            <li class="active" style="background-color: #dddfe4; border-radius: 20px; padding: 5px 20px;"><?= $name['name']?></li>
                                        <?php
                                        }
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="product-box page hidden active all w-full grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-3 p-1 sm:p-5"
                            page="all">

                            <!-- box -->
                            <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                                <a href="viewdetail.php?id=<?= $data['id']?>" class="flex flex-col items-center space-y-2 w-full">
                                    <div class="pro-img w-full overflow-hidden rounded-md">
                                        <img src="uploads/category/<?= $data['image']?>"
                                            alt="" class="w-full">
                                    </div>
                                    <div
                                        class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                                        <del class="dis-price opacity-50"><?= $data['sell_price']?></del>
                                        <div class="full-price text-[#f34770!important]"><?= $data['original_price']?></div>
                                    </div>
                                    <div
                                        class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                                        <?= $data['description']?></div>
                                    <button
                                        class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                            class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                                    <div class="line"></div>
                                </a>
                            </div>

                    </div>
                </div>
            <?php
            }
        }
    ?>

    <!-- oppo-product -->
    <?php
        $brand = getAll("brands");
        if($brand->num_rows > 0){
            foreach($brand as $data){
            ?>
                <div class="oppo-product mt-5 md:mt-10 w-full">
        <div class="head p-3 sm:p-5">
            <h1
                class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">
                <?= $data['name']?></h1>
            <h3
                class="font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium mt-2">
                Most popular products recommended to you</h3>
        </div>

        <!-- product-box -->
        <div
            class="product-box w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6 gap-3 p-1 sm:p-5">
            <!-- box -->
            <?php
                $item = getProductByBrand("brand_id",$data['id']);
                if($item->num_rows > 0){
                    foreach($item as $data1){
                    ?>
                     <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                        <a href="viewdetail.php?id=<?= $data1['id']?>" class="flex flex-col items-center space-y-2 w-full">
                            <div class="pro-img w-full overflow-hidden rounded-md">
                                <img src="uploads/category/<?= $data1['image']?>"
                                    alt="" class="w-full">
                            </div>
                            <div
                                class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                                <del class="dis-price opacity-50">$<?= $data1['sell_price']?></del>
                                <div class="full-price text-[#f34770!important]">$<?= $data1['original_price']?></div>
                            </div>
                            <div
                                class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                                <?= $data1['description']?></div>
                            <button
                                class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                    class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                            <div class="line"></div>
                        </a>
                    </div>

                    </div>
                    <?php
                    }
                }
            ?>
            <?php
            }
        }
    ?>
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

    <!-- secondhand-product -->
    <?php
        $item = getPopularProduct("used_pd",1);
        if($item->num_rows >0){
            foreach($item as $data){
            ?>
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
                        <!-- display -->
                         <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg bg-[#fff]">
                            <a href="#" class="flex flex-col items-center space-y-2 w-full">
                                <div class="pro-img w-full overflow-hidden rounded-md">
                                    <img src="uploads/category/<?= $data['image']?>"
                                        alt="" class="w-full">
                                </div>
                                <div
                                    class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                                    <del class="dis-price opacity-50">$<?= $data['sell_price']?></del>
                                    <div class="full-price text-[#f34770!important]">$<?= $data['original_price']?></div>
                                </div>
                                <div
                                    class="pro-name text-center text-[13px] md:text-[15px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden">
                                    <?= $data['description']?></div>
                                <button
                                    class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i
                                        class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                                <div class="line"></div>
                            </a>
                        </div>
                        <!-- end display -->
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
            <?php
            }
        }
    ?>
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
