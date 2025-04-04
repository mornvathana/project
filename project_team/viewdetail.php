<?php 
include('includes/header.php');
  if(isset($_GET['id'])){
    $product = $_GET['id'];
    $product_item = getProductEach($product);
  }
?>
  <?php
    if($product_item->num_rows > 0){
      foreach($product_item as $item){
        ?>
          <main class="max-w-[90%] sm:max-w-[90%] md:max-w-[90%] lg:max-w-[90%] xl:max-w-[80%] 2xl:max-w-[80%] m-auto grid grid-cols-[100%] lg:grid-cols-[350px,1fr] gap-[2rem] lg:gap-[5rem] items-start">
          <div class="pro-img-detail static lg:sticky top-[5rem] w-full">
            <div class="main-img overflow-hidden rounded-xl w-full">
              <img src="uploads/category/<?= $item['image']?>" alt="" class="w-full lg:w-[500px] h-auto lg:h-[300px]" id="zoom">
            </div>
            
            <!-- pro-detail-slider -->
            <div class="slide-container swiper">
              <div class="slide-content">
                  <div class="more-img card-wrapper swiper-wrapper">
                  <?php
                      $imageString = $item['demo_image'];
                      $imageArray = explode(',', $imageString);
                      foreach ($imageArray as $img) {
                    ?>
                        <div class="active-box-img child-img swiper-slide">
                          <img src="uploads/category/<?php echo htmlspecialchars($img); ?>" alt="" class="card-img">
                        </div>
                    <?php
                      }
                    ?>
                  </div>
              </div>
          
              <div class="swiper-button-next swiper-navBtn text-gray-700"></div>
              <div class="swiper-button-prev swiper-navBtn text-gray-700"></div>
              <!-- <div class="swiper-pagination"></div> -->
            </div>

          </div>
        
          <div class="pro-detail mt-0 lg:mt-5">
            <div>
              <div class="head">
                  <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[18px] sm:text-[23px] text-gray-700 shadow-black"><?= $item['name']?></h1>
              </div>

              <div class="line w-full h-[1px] bg-[#144194] rounded-xl mt-3"></div>

              <div class="price font-[Poppins,hanuman,Sans-serif] text-2xl md:text-4xl text-[#f34770!important] font-semibold mt-5 sm:mt-10">$<?= $item['sell_price'] ?></div>
              <div class="contact-us flex flex-col font-[Poppins,hanuman,Sans-serif] text-sm sm:text-md font-semibold mt-5 md:mt-8 space-y-3 text-[#144194]">
                  <a href="#"><i class="fa-brands fa-telegram"></i> Chat Via Telegram</a>
                  <a href="#"><i class="fa-brands fa-whatsapp"></i> Chat Via Whatsapp</a>
                  <a href="#"><i class="fa-solid fa-phone"></i> Call Now: 0963904112</a>
              </div>
              <div class="btn mt-5 flex items-center space-x-5 product_qty">
                <div><input type="number" id="inputValue" value="1" min="1" step="1" class="input-qty w-[70px] text-center border border-gray-300 rounded-lg p-1 sm:p-2 font-semibold"></div>
                <form action="" method = "post" class = "upl">
                  <input type="hidden" name = "" id = "prod_id" value = "<?= $item['id']?>">
                  <input type="hidden" id = "product_name" value = "<?= $item['name']?>">
                  <input type="hidden" id = "product_barcode" value = "<?= $item['barcode']?>">
                  <input type="hidden" id = "specification" value = "<?= $item['specification']?>">
                  <input type="hidden" id = "product_price" value ="<?= $item['sell_price']?>">
                  <input type="hidden" id = "product_image" value = "<?= $item['image']?>">
                  <button type = "submit" class="bg-blue-500 text-white py-1 sm:py-2 px-3 sm:px-5 rounded-full font-semibold addToCart" id = "add_checkout"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </form>
            </div>
              <div class="category font-[Poppins,hanuman,Sans-serif] flex items-baseline lg:items-center space-x-3 mt-5 w-full">
                  <h1 class="font-semibold text-gray-700 text-sm sm:text-lg">Category</h1>
                  <h3 class="font-medium text-gray-700 text-[10px] sm:text-sm">2nd Hand Mobiles, Used Samsung</h3>
              </div>
              <div class="btn mt-5 flex items-center space-x-5">
                  <button class="text-blue-800 rounded-full font-semibold"><i class="fa-regular fa-heart"></i> Add to favorite</button>
                  <button class="text-blue-800 rounded-full font-semibold"><i class="fa-brands fa-facebook"></i> Share to facebook</button>
              </div>
            </div>
            <div class="specification w-full border rounded-xl mt-5 p-1 bg-opacity-30">
              <table class="table-auto w-full">
                  <tbody class="font-[Roboto,hanuman,Sans-serif]">
                    <!-- NETWORK -->
                    <tr class="border-b">
                      <th class="text-left font-bold p-3 text-blue-700 text-lg">Specification</th>
                    </tr>
                    
                    <?php
                    $html = $item['specification'];
                    $dom = new DOMDocument();
                    libxml_use_internal_errors(true); // avoid HTML warnings
                    $dom->loadHTML($html);

                    $paragraphs = $dom->getElementsByTagName('p');

                    foreach ($paragraphs as $p) {
                        ?>
                        <tr>
                        <td class="p-3 text-gray-700"><?php echo $p->nodeValue; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr class="border-b">
                      <th class="text-left font-bold p-3 text-blue-700 text-lg">Description</th>
                    </tr>
                    <?php
                    $html = $item['description'];
                    $dom = new DOMDocument();
                    libxml_use_internal_errors(true); // avoid HTML warnings
                    $dom->loadHTML($html);

                    $paragraphs = $dom->getElementsByTagName('p');

                    foreach ($paragraphs as $p) {
                        ?>
                        <tr>
                        <td class="p-3 text-gray-700"><?php echo $p->nodeValue; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                  </tbody>
                </table>
            </div>
          </div>
      </main>
        <?php
      }
    } 
  ?>
<?php include('includes/footer.php')?>