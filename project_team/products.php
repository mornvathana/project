<?php include('includes/header.php')?>
<?php
  	$min = isset($_GET['min-price']) ? (int)$_GET['min-price'] : 8;
    $max = isset($_GET['max-price']) ? (int)$_GET['max-price'] : 3000;
    if(isset($_GET{'id'}) && isset($_GET['slug'])){
        $product = $_GET['id'];
        $slug = $_GET['slug'];
        $product_item = getProduct($product,$min,$max,$slug);
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
        <div class="price_range_slider w-[100%] lg:w-[20%] h-fit grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-1 2xl:lg:grid-cols-1 gap-3 mt-10 md:mt-0 font-[Poppins,hanuman,Sans-serif] rounded-lg" style="border: 1px solid #e5e7eb;">
        <div class="bg-white rounded-lg p-6 w-full max-w-xs font-[Poppins,hanuman,Sans-serif]">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">CATEGORIES</h3>
            <button class="text-blue-500 text-sm font-medium" id="resetButton">Reset</button>
        </div>
        
        <div class="space-y-[0px]">
            <div class="category-item active flex items-center p-2 rounded-md cursor-pointer space-x-3">
                <input type="checkbox" value="all" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2" checked>
                <span class="text-sm">All</span>
            </div>
            
            <div class="category-item flex items-center p-2 rounded-md cursor-pointer space-x-3">
                <input type="checkbox" value="mobile" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                <span class="text-sm">Mobile Phone</span>
            </div>
            
            <div class="category-item flex items-center p-2 rounded-md cursor-pointer space-x-3">
                <input type="checkbox" value="earphones" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                <span class="text-sm">Bluetooth Earphones</span>
            </div>
            
            <div class="category-item flex items-center p-2 rounded-md cursor-pointer space-x-3">
                <input type="checkbox" value="case" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                <span class="text-sm">Case</span>
            </div>
            
            <div class="category-item flex items-center p-2 rounded-md cursor-pointer space-x-3">
                <input type="checkbox" value="speaker" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
                <span class="text-sm">Bluetooth Speaker</span>
            </div>
        </div>
        </div>
        </div>

        <div class="w-[100%] lg:w-[78%]">

            <div class="product-head flex justify-between items-center px-3 sm:px-3 py-2 border rounded-sm">
                <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[23px] sm:text-3xl text-[#2e3192] shadow-black">
                    <?php
                        $name = getBrandTitle("brands",$product);
                        if($name->num_rows > 0){
                            foreach($name as $data){
                            ?>
                            <?= $data['name']?>
                            <?php
                            }
                        }
                    ?>
                </h1>
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
            <!-- <form method="GET" action="" class="flex items-center justify-center">
              <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">
              <input type="hidden" name="slug" value="<?= $_GET['slug'] ?>">
              <div class="rounded-xl w-full">
                  <div class="relative mt-8">
                      <div class="range-container">
                          <div id="slider-track" class="track"></div>
                          <input type="range" name="min-price" id="range-min" min="0" max="3000" value="<?= $_GET['min-price'] ?? 8 ?>" step="1" class="absolute left-0 z-10">
                          <input type="range" name="max-price" id="range-max" min="0" max="3000" value="<?= $_GET['max-price'] ?? 3000 ?>" step="1" class="absolute right-0 z-11">
                      </div>
                  </div>
                  <div class="mt-3 text-center font-[Poppins,hanuman,Sans-serif]">
                      <span id="min-value" class="text-md md:text-lg font-normal text-gray-800"><?= $_GET['min-price'] ?? 0 ?></span> -
                      <span id="max-value" class="text-md md:text-lg font-normal text-gray-800"><?= $_GET['max-price'] ?? 3000 ?></span>
                  </div>
              </div>
              </form> -->

              <!-- <div class="wrapper mt-5">
                <div class="price-input">
                    <div class="field">
                        <span>Min</span>
                        <input type="number" class="input-min" value="2500">
                    </div>
                    <div class="separator">-</div>
                    <div class="field">
                        <span>Max</span>
                        <input type="number" class="input-max" value="7500">
                    </div>
                </div>
                <div class="slider">
                    <div class="progress"></div>
                </div>
                <div class="range-input">
                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                </div>
                </div> -->

         
            <!-- product-box -->
            <div class="product-box w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-4 gap-3 mt-5">
            <!-- box -->
            <?php
            if(mysqli_num_rows( $product_item) > 0){
                foreach( $product_item as $item){
                ?>
                <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg">
                <a href="viewdetail.php?id=<?= $item['id']?>" class="flex flex-col items-center space-y-2 w-full">
                    <div class="pro-img w-auto overflow-hidden rounded-md">
                        <img src="uploads/category/<?= $item['image']?>" alt="" class="w-full 2xl:h-[145px] xl:h-[145px] lg:h-[145px] md:h-[145px] sm:h-[155px] h-[145px]">
                    </div>
                    <div class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                        <del class="dis-price opacity-50">$<?= $item['sell_price']?></del>
                        <div class="full-price text-[#f34770!important]">$<?= $item['original_price']?></div>
                    </div>
                    <div class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden"><?= $item['name']?></div>
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

        <!-- <div class="banner w-[100%] lg:w-[20%] h-auto lg:h-[500px] grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-1 xl:grid-cols-1 2xl:lg:grid-cols-1 gap-3 mt-10 md:mt-0">
            <a href="#"><img src="https://angkormeas.com/wp-content/uploads/2023/10/Apple-Watch-Ultra-2-2024.webp" alt="" class="w-full h-full"></a>
            <a href="#"><img src="https://angkormeas.com/wp-content/uploads/2023/10/Apple-Watch-Series-10.webp" alt="" class="w-full h-full"></a>
            <a href="#"><img src="https://angkormeas.com/wp-content/uploads/2023/10/Apple-Watch-SE-2024.webp" alt="" class="w-full h-full"></a>
        </div> -->
    </div>
    <!-- end product -->
    <script>
        const form = document.querySelector("form");
        const rangeMin = document.getElementById("range-min");
        const rangeMax = document.getElementById("range-max");
        const minValue = document.getElementById("min-value");
        const maxValue = document.getElementById("max-value");

        rangeMin.addEventListener("input", () => {
            minValue.textContent = rangeMin.value;
        });

        rangeMax.addEventListener("input", () => {
            maxValue.textContent = rangeMax.value;
        });
        
        rangeMin.addEventListener("change", () => {
            form.submit();
        });
        rangeMax.addEventListener("change", () => {
            form.submit();
        });

        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const resetButton = document.getElementById('resetButton');
        const categoryItems = document.querySelectorAll('.category-item');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    // Uncheck all other checkboxes
                    checkboxes.forEach(cb => {
                        if (cb !== this) cb.checked = false;
                    });
                    
                    // Update active states
                    categoryItems.forEach(item => {
                        item.classList.remove('active');
                    });
                    this.closest('.category-item').classList.add('active');
                } else {
                    // Prevent unchecking the last checked item
                    const checkedItems = document.querySelectorAll('input[type="checkbox"]:checked');
                    if (checkedItems.length === 0) {
                        this.checked = true;
                    }
                }
            });
        });
        
        // category filter
        resetButton.addEventListener('click', function() {
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            document.querySelector('input[value="all"]').checked = true;
            
            categoryItems.forEach(item => {
                item.classList.remove('active');
            });
            document.querySelector('input[value="all"]').closest('.category-item').classList.add('active');
        });

        const rangeInput = document.querySelectorAll(".range-input input"),
        priceInput = document.querySelectorAll(".price-input input"),
        range = document.querySelector(".slider .progress");
        let priceGap = 1000;

        priceInput.forEach(input =>{
        input.addEventListener("input", e =>{
        let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);
        
        if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
            if(e.target.className === "input-min"){
                rangeInput[0].value = minPrice;
                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
            }else{
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
        });
        });

    </script>

<?php include('includes/footer.php')?>