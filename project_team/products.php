<?php include('includes/header.php')?>
<?php
    if(isset($_GET{'Id'})){
        $product = $_GET['Id'];
         $product_item = whereProduct("category_db","product_id",$product);
    }
?>
<!-- start proudct -->
  <div class="page py-3 md:py-5 px-5 font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium w-full">
        <ul class="flex space-x-3">
            <li><a href="#">Home</a></li>
            <li><a href="#">. Products</a></li>
        </ul>
    </div>

    <!-- container -->
    <div class="Container_product flex flex-col lg:flex-row w-[100%] justify-between mx-auto p-1 sm:p-5">
        <div class="w-[100%] lg:w-[78%]">

            <div class="product-head flex justify-between items-center px-3 sm:px-3 py-2 border rounded-sm">
                <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">APPLE</h1>
                <div class="sort-box font-[Poppins,hanuman,Sans-serif] text-[13px] sm:text-[15px] md:text-[16px] lg:text-[16px] xl:text-[16px] 2xl:text-[16px] text-gray-700 font-medium">
                    <select name="" id="" class="border bg-[#fff] p-2 sm:p-2 rounded-md">
                        <option value="">Default</option>
                        <option value="">Low - High Price</option>
                        <option value="">High - Low Price</option>
                        <option value="">Most Popular</option>
                        <option value="">A - Z Order</option>
                        <option value="">Z-A Order</option>
                    </select>
                </div>
            </div>
            <!-- end of product-head -->
            
            <!-- ui slider range -->
            <div class="flex items-center justify-center">
                <div class="rounded-xl w-full">    
                    <!-- Range Slider -->
                    <div class="relative mt-8">
                        <div class="range-container">
                            <div id="slider-track" class="track"></div>
                            <input type="range" id="range-min" min="8" max="1000" value="8" step="1" class="absolute left-0 z-10">
                            <input type="range" id="range-max" min="8" max="1000" value="1000" step="1" class="absolute right-0 z-10">
                        </div>
                    </div>
            
                    <!-- Display current min and max value -->
                    <div class="mt-3 text-center font-[Poppins,hanuman,Sans-serif]">
                        <span id="min-value" class="text-md md:text-lg font-normal text-gray-800">8</span> -
                        <span id="max-value" class="text-md md:text-lg font-normal text-gray-800">1000</span>
                    </div>
                </div>
            
            </div>

            <!-- product-box -->
            <div class="product-box w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-4 gap-3 mt-5">
            <!-- box -->
            <?php
            if(mysqli_num_rows( $product_item) > 0){
                foreach( $product_item as $item){
                ?>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="viewdetail.php?id=<?= $item['id']?>" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-full overflow-hidden rounded-md">
                        <img src="uploads/<?= $item['image']?>" alt="" class="w-full">
                    </div>
                    <div class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$<?= $item['sell_price']?></del>
                        <div class="full-price text-[#f34770!important]">$<?= $item['original_price']?></div>
                    </div>
                    <div class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden"><?= $item['small_des']?></div>
                    <button class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    <div class="line"></div>
                </a>
                </div>
                <?php
                }
            }
            ?>
            <!-- end box -->
            </div>
            <!-- end of product-box -->
            
            <!-- pagination -->
            <div class="flex justify-center mt-10 md:mt-20">
                <nav aria-label="pagination navigation example" class="pagination">
                  <ul class="inline-flex items-center space-x-1">
                    <!-- Previous Button -->
                    <li>
                      <a href="#" class="px-3 py-2 text-sm font-semibold text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
                        Previous
                      </a>
                    </li>
                    
                    <!-- Page Number Buttons -->
                    <li>
                      <a href="#" class="px-3 py-2 text-sm font-semibold text-gray-500 bg-white border border-gray-300 hover:bg-blue-500 hover:text-white">1</a>
                    </li>
                    <li>
                      <a href="#" class="px-3 py-2 text-sm font-semibold text-gray-500 bg-white border border-gray-300 hover:bg-blue-500 hover:text-white">2</a>
                    </li>
                    <li>
                      <a href="#" class="px-3 py-2 text-sm font-semibold text-gray-500 bg-white border border-gray-300 hover:bg-blue-500 hover:text-white">3</a>
                    </li>
                    
                    <!-- Next Button -->
                    <li>
                      <a href="#" class="px-3 py-2 text-sm font-semibold text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">
                        Next
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end of pagination -->
              
        </div>

        <div class="banner w-[100%] lg:w-[20%] h-auto lg:h-[500px] grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-1 2xl:lg:grid-cols-1 gap-3 mt-10 md:mt-0">
            <a href="#"><img src="https://angkormeas.com/wp-content/uploads/2023/10/Apple-Watch-Ultra-2-2024.webp" alt="" class="w-full h-full"></a>
            <a href="#"><img src="https://angkormeas.com/wp-content/uploads/2023/10/Apple-Watch-Series-10.webp" alt="" class="w-full h-full"></a>
            <a href="#"><img src="https://angkormeas.com/wp-content/uploads/2023/10/Apple-Watch-SE-2024.webp" alt="" class="w-full h-full"></a>
        </div>
    </div>
<!-- end product -->
<?php include('includes/footer.php')?>