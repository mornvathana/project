<?php 
ob_start();
include('includes/header.php');
include('authication.php');
  if(isset($_GET['id'])){
    $product = $_GET['id'];
    $product_item = getProductEach($product);
    
  }

if($_SESSION['auth_user']){
    $user_id = $_SESSION['auth_user']['user_id'];
}

ob_end_flush();
?>
  <?php
    if($product_item->num_rows > 0){
      foreach($product_item as $item){
        ?>
          <main class="max-w-[90%] sm:max-w-[90%] md:max-w-[90%] lg:max-w-[90%] xl:max-w-[80%] 2xl:max-w-[80%] m-auto grid grid-cols-[100%] lg:grid-cols-[350px,1fr] gap-[2rem] lg:gap-[5rem] items-start">
          <div class="pro-img-detail static lg:sticky top-[5rem] w-full">
            <div class="main-img overflow-hidden rounded-xl w-full">
              <img src="uploads/category/<?= $item['image']?>" alt="" class="w-full lg:w-[500px] h-auto lg:h-[350px]" id="zoom">
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
                        <div class="active-box-img child-img swiper-slide h-[100px] w-[100px] sm:h-[120px] sm:w-[120px] md:h-[150px] md:w-[150px] lg:h-[90px] lg:w-[180px] xl:h-[90px] xl:w-[200px] 2xl:h-[100px] 2xl:w-[200px] overflow-hidden rounded-lg">
                          <img src="uploads/category/<?php echo htmlspecialchars($img); ?>" alt="" class="card-img w-full h-full">
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
                <form method = "post" class = "upl">
                  <input type="hidden" id = "prod_id" value = "<?= $item['id']?>">
                  <input type="hidden" id = "product_name" value = "<?= $item['name']?>">
                  <input type="hidden" id = "product_barcode" value = "<?= $item['barcode']?>">
                  <input type="hidden" id = "product_price" value ="<?= $item['sell_price']?>">
                  <input type="hidden" id = "product_image" value = "<?= $item['image']?>">
                  <button type = "submit" class="bg-blue-500 text-white py-1 sm:py-2 px-3 sm:px-5 rounded-full font-semibold addToCart" ><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </form>
            </div>
              <div class="category font-[Poppins,hanuman,Sans-serif] flex items-baseline lg:items-center space-x-3 mt-5 w-full">
                  <h1 class="font-semibold text-gray-700 text-sm sm:text-lg">Category</h1>
                  <h3 class="font-medium text-gray-700 text-[10px] sm:text-sm"><?= $item['slug'] ?> ,</h3>
                  <?php
                        // Display brand name
                        $name = getBrandTitle("brands", $item['brand_id']);
                        if($name->num_rows > 0){
                          foreach($name as $brand){
                            ?>
                            <h3 class="font-medium text-gray-700 text-[10px] sm:text-sm"><?= $brand['name'] ?></h3>
                            <?php
                          }
                        }
                  ?>
              </div>
              <div class="btn mt-5 flex items-center">
                <!-- show heart full when product is favorite -->
                <?php
                $favorite = "SELECT * FROM favorite WHERE user_id = $user_id AND product_id = $product";
                $result = $conn->query($favorite);
                if($result->num_rows > 0){
                  ?>
                  <input type="hidden" id = "favoriteid" value = "<?= $result->fetch_assoc()['id']?>">
                  <input type="hidden" id = "favoriteuser" value = "<?= $user_id?>">
                  <button class="text-blue-800 rounded-full font-semibold flex items-center" id = "removefavorite" data-id = "<?= $product ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                  <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                  </svg>
                  <span class="ml-1 text-md">Remove favorite</span></button>
                  <button class="text-blue-800 rounded-full font-semibold flex items-center ml-3"><i class="fa-brands fa-facebook"></i> <span class="ml-1 text-md">Share to facebook</span></button>
                  <?php
                } else {
                  ?>
                  <button class="text-blue-800 rounded-full font-semibold flex items-center" id = "addfavorite" data-id = "<?= $product ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                  <span class="ml-1 text-md">Add to favorite</span></button>
                  <button class="text-blue-800 rounded-full font-semibold flex items-center ml-3"><i class="fa-brands fa-facebook"></i> <span class="ml-1 text-md">Share to facebook</span></button>
                  <?php
                }
                ?>
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
  <script>
    // add favorite
    $(document).on("click","#addfavorite",function(){
      const id = $(this).data("id");
      
      $.ajax({
        method: "POST",
        url: "function/code.php",
        data: {
          "id" : id,
          "scrope" : "addfavorite",
        },
        success: function (data) {

          if(data == 202){
             Swal.fire({
              icon: 'success',
              title: '<span class="text-gray-800 font-semibold text-lg">Product added favorite!</span>',
              showCancelButton: false, 
              showConfirmButton: false, 
              timer: 3000,  
              background: '#fff',
              focusCancel: true,
              buttonsStyling: false,
              customClass: {
                  popup: 'rounded-xl shadow-md p-6',
              },
              didOpen: () => {
                  document.querySelector('.swal2-popup').style.width = '400px';
              }
              });
          }else if(data == 102){
             Swal.fire({
              icon: 'warning',
              title: '<span class="text-gray-800 font-semibold text-lg">Product already exist!</span>',
              showCancelButton: false, 
              showConfirmButton: false, 
              timer: 3000,  
              background: '#fff',
              focusCancel: true,
              buttonsStyling: false,
              customClass: {
                  popup: 'rounded-xl shadow-md p-6',
              },
              didOpen: () => {
                  document.querySelector('.swal2-popup').style.width = '400px';
              }
              });
          }else{
              Swal.fire({
              icon: 'warning',
              title: '<span class="text-gray-800 font-semibold text-lg">Something went wrong!</span>',
              showCancelButton: false, 
              showConfirmButton: false, 
              timer: 3000,  
              background: '#fff',
              focusCancel: true,
              buttonsStyling: false,
              customClass: {
                  popup: 'rounded-xl shadow-md p-6',
              },
              didOpen: () => {
                  document.querySelector('.swal2-popup').style.width = '400px';
              }
              });
          }
          
        }
      });
    });

    // remove favorite
       $(document).ready(function(){
        $(document).on("click","#removefavorite",function(){
            let favoriteid = $("#favoriteid").val();
            let favoriteuser = $("#favoriteuser").val();

            $.ajax({
                method: "POST",
                url: "function/code.php",
                data: {
                    "favoriteid" : favoriteid,
                    "favoriteuser" : favoriteuser,
                    "scrope" : "deletefavorite",
                },
                success: function (data) {
                    if(data == 202){
                        Swal.fire({
                        icon: 'success',
                        title: '<span class="text-gray-800 font-semibold text-lg">Password updated!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        }).then(() =>{
                            $(`#data-${favoriteid}`).remove();
                        });
                    }else if(data == 101){
                         Swal.fire({
                        icon: 'warning',
                        title: '<span class="text-gray-800 font-semibold text-lg">Something went wrong!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                    }
                }
            });
        });
    });
  </script>
<?php include('includes/footer.php')?>