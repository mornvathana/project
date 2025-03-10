<?php include('includes/header.php')?>
    <!-- end of responsive-navbar -->
    <!-- end of header -->
    <?php
    if(isset($_GET['id'])){
        $category_id = $_GET['id'];
        $category_detail = getCategory("id",$category_id);
    }
    ?>
    <?php
        if(mysqli_num_rows($category_detail) > 0){
            foreach($category_detail as $category_item){
            ?>
          <main class="max-w-[90%] lg:max-w-[80%] m-auto grid grid-cols-[100%] lg:grid-cols-[350px,1fr] gap-[2rem] lg:gap-[5rem] items-start">
          <div class="pro-img-detail static lg:sticky top-[5rem] w-full">
          <div class="main-img overflow-hidden rounded-xl w-full">
            <img src="uploads/<?= $category_item['image']?>" alt="uploads/<?= $category_item['image']?>" class="w-full lg:w-[500px] h-auto lg:h-[300px]" id="zoom">
          </div>
          
          <!-- pro-detail-slider -->
          <div class="slide-container swiper">
            <div class="slide-content">
                <div class="more-img card-wrapper swiper-wrapper">
                    
                    <div class="active-box-img child-img swiper-slide">
                        <img src="uploads/<?= $category_item['demo_image']?>" alt="" class="card-img">
                    </div>
                   
                    <div class="child-img swiper-slide">
                      <img src="https://soklyphone.com/storage/Honor/Honor-Pad-X8a/2-1733298134Skx21.png" alt="" class="card-img">
                    </div>

                    <div class="child-img swiper-slide">
                    <img src="https://soklyphone.com/storage/Honor/Honor-Pad-X8a/3-1733298135QgjLZ.png" alt="" class="card-img">
                    </div>

                    <div class="child-img swiper-slide">
                    <img src="https://soklyphone.com/storage/Honor/Honor-Pad-X8a/5-173329813669f1x.png" alt="" class="card-img">
                    </div>
                    
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
                <h1 class="font-bold font-[Montserrat,hanuman,Sans-serif] text-[18px] sm:text-[23px] text-gray-700 shadow-black"><?= $category_item['small_des']?></h1>
            </div>
            <div class="price font-[Poppins,hanuman,Sans-serif] text-2xl md:text-4xl text-[#f34770!important] font-semibold mt-5 sm:mt-10">$ <?= $category_item['sell_price']?></div>
            <div class="contact-us flex flex-col font-[Poppins,hanuman,Sans-serif] text-md font-semibold mt-5 space-y-2 text-[#144194]">
                <a href="#"><i class="fa-brands fa-telegram"></i> Chat Via Telegram</a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i> Chat Via Whatsapp</a>
                <a href="#"><i class="fa-solid fa-phone"></i> Call Now: 0963904112</a>
            </div>
            <div class="btn mt-5 flex items-center space-x-5 product_qty">
                <div><input type="number" id="inputValue" value="1" min="1" step="1" class="input-qty w-[70px] text-center border border-gray-300 rounded-lg p-1 sm:p-2 font-semibold"></div>
                <form action="" method = "post" class = "upl">
                  <input type="hidden" name = "" id = "prod_id" value = "<?= $category_item['id']?>">
                  <input type="hidden" class = "product_name" value = "<?= $category_item['name']?>">
                  <input type="hidden" id = "product_des" value = "<?= $category_item['small_des']?>">
                  <input type="hidden" id = "product_price" name="<?= $category_item['sell_price']?>">
                  <input type="hidden" value = "<?= $category_item['ram']?>">
                  <input type="hidden" id = "product_image" value = "<?= $category_item['image']?>">
                  <input type="hidden" value = "<?= $category_item['internal']?>">
                  <button type = "submit" class="bg-blue-500 text-white py-1 sm:py-2 px-3 sm:px-5 rounded-full font-semibold addToCart" id = "add_checkout"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </form>
            </div>
            <!-- start checkout -->
           
            <!-- end form checkout -->
            <div class="category font-[Poppins,hanuman,Sans-serif] flex items-baseline lg:items-center space-x-3 mt-5 w-full">
                <h1 class="font-semibold text-gray-700 text-sm sm:text-lg">Category</h1>
                <h3 class="font-medium text-gray-700 text-[10px] sm:text-sm">2nd Hand Mobiles, Used Samsung</h3>
            </div>
          </div>
          <div class="specification w-full border rounded-xl mt-5 p-1 bg-opacity-30">
            <table class="table-auto w-full">
                <tbody class="font-[Roboto,hanuman,Sans-serif]">
                  <!-- NETWORK -->
                  <?php
                      if(!empty($category_item['technology'])){
                        ?>
                          <tr class="border-b">
                          <th class="text-left font-bold p-3 text-blue-700 text-lg">NETWORK</th>
                        </tr>
                        <tr>
                          <td class="text-gray-800 font-medium p-3">Technology</td>
                          <td class="p-3 text-gray-700"><?= $category_item['technology']?></td>
                        </tr>
                        <?php
                      }
                  ?>
                  <!-- LAUNCH -->
                   <?php
                    if(!empty($category_item['announced']) && !empty($category_item['Satus'])){
                      ?>
                      <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">LAUNCH</th>
                      </tr>
                      <tr>
                        <td class="text-gray-800 font-medium p-3">Announced</td>
                        <td class="p-3 text-gray-700"><?= $category_item['announced']?></td>
                      </tr>
                      <tr>
                        <td class="text-gray-800 font-medium p-3">Status</td>
                        <td class="p-3 text-gray-700"><?= $category_item['Satus']?></td>
                      </tr>
                      <?php
                    }else if(empty($category_item['announced'])){
                      ?>
                      <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">LAUNCH</th>
                      </tr>
                      <tr>
                        <td class="text-gray-800 font-medium p-3">Status</td>
                        <td class="p-3 text-gray-700"><?= $category_item['Satus']?></td>
                      </tr>
                      <?php
                    }else if(empty($category_item['Satus'])){
                      ?>
                      </tr>
                      <tr class="border-b">
                      <th class="text-left font-bold p-3 text-blue-700 text-lg">LAUNCH</th>
                      </tr>
                      <tr>
                        <td class="text-gray-800 font-medium p-3">Announced</td>
                        <td class="p-3 text-gray-700"><?= $category_item['announced']?></td>
                      </tr>
                      <?php
                    }
                   ?>
                  

                  <!-- BODY -->
                  <?php
                    if(!empty($category_item['dimensions']) && !empty($category_item['weight']) && !empty($category_item['sim']) ){
                      ?>
                      <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">BODY</th>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">Dimensions</td>
                    <td class="p-3 text-gray-700"><?= $category_item['dimensions']?></td>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">Weight</td>
                    <td class="p-3 text-gray-700"><?= $category_item['weight']?></td>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">SIM</td>
                    <td class="p-3 text-gray-700">
                    <?= $category_item['sim']?>
                    </td>
                    </tr>
                      <?php
                    }else if((!empty($category_item['dimensions']))){
                      ?>
                        <tr class="border-b">
                        <th class="text-left font-bold p-3 text-blue-700 text-lg">BODY</th>
                      </tr>
                      <tr>
                        <td class="text-gray-800 font-medium p-3">Dimensions</td>
                        <td class="p-3 text-gray-700"><?= $category_item['dimensions']?></td>
                      </tr>
                      <?php
                    }else if(!empty($category_item['weight'])){
                      ?>
                       <tr class="border-b">
                        <th class="text-left font-bold p-3 text-blue-700 text-lg">BODY</th>
                      </tr>
                      <tr>
                      <td class="text-gray-800 font-medium p-3">Weight</td>
                      <td class="p-3 text-gray-700"><?= $category_item['weight']?></td>
                    </tr>
                      <?php
                    }else if(!empty($category_item['sim'])){
                      ?>
                      <tr class="border-b">
                        <th class="text-left font-bold p-3 text-blue-700 text-lg">BODY</th>
                      </tr>
                      <td class="text-gray-800 font-medium p-3">SIM</td>
                      <td class="p-3 text-gray-700">
                      <?= $category_item['sim']?>
                      </td>
                      </tr>
                      <?php
                    }
                  ?>
                  <!-- memory -->
                  <?php
                  if(!empty($category_item['card_slot']) && !empty($category_item['internal'])){
                    ?>
                    <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Memory</th>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">CardSlot</td>
                    <td class="p-3 text-gray-700"><?= $category_item['card_slot']?></td>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">Internal</td>
                    <td class="p-3 text-gray-700"><?= $category_item['internal']?></td>
                  </tr>
                    <?php
                  }else if(!empty($category_item['card_slot'])){
                    ?>
                    <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Memory</th>
                    </tr>
                    <tr>
                      <td class="text-gray-800 font-medium p-3">CardSlot</td>
                      <td class="p-3 text-gray-700"><?= $category_item['card_slot']?></td>
                    </tr>
                    <?php
                  }else if(!empty($category_item['internal'])){
                    ?>
                     <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Memory</th>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">Internal</td>
                    <td class="p-3 text-gray-700"><?= $category_item['internal']?></td>
                  </tr>
                    <?php
                  }
                  ?>
                  

                  <!-- camera -->
                  <?php
                    if(!empty($category_item['features']) && !empty($category_item['video_camera'])){
                      ?>
                       <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Camera</th>
                    </tr>
                    <tr>
                      <td class="text-gray-800 font-medium p-3">Features</td>
                      <td class="p-3 tex-gray-700"><?= $category_item['features']?></td>
                    </tr>
                    <tr>
                      <td class="text-gray-800 font-medium p-3">Video</td>
                      <td class="p-3 text-gray-700"><?= $category_item['video_camera']?></td>
                    </tr>
                      <?php
                    }else if(!empty($category_item['features'])){
                      ?>
                        <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Camera</th>
                    </tr>
                    <tr>
                      <td class="text-gray-800 font-medium p-3">Features</td>
                      <td class="p-3 tex-gray-700"><?= $category_item['features']?></td>
                    </tr>
                      <?php
                    }else if(!empty($category_item['video_camera'])){
                      ?>
                      <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Camera</th>
                    </tr>
                    <tr>
                      <td class="text-gray-800 font-medium p-3">Video</td>
                      <td class="p-3 text-gray-700"><?= $category_item['video_camera']?></td>
                    </tr>
                      <?php
                    }
                  ?>
                 
                  <!-- sound -->

                   <!-- battery -->
                   <?php
                    if(!empty($category_item['battery_type']) && !empty($category_item['battery_charging'])){
                      ?>
                        <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Battery</th>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">Battery</td>
                    <td class="p-3 text-gray-700">
                    <?= $category_item['battery_type']?>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-gray-800 font-medium p-3">Charging</td>
                    <td class="p-3 text-gray-700">
                    <?= $category_item['battery_charging']?>
                    </td>
                  </tr>
                      <?php
                    }else if(!empty($category_item['battery_type'])){
                      ?>
                         <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Battery</th>
                    </tr>
                    <tr>
                      <td class="text-gray-800 font-medium p-3">Battery</td>
                      <td class="p-3 text-gray-700">
                      <?= $category_item['battery_type']?>
                      </td>
                    </tr>
                      <?php
                    }else if(!empty($category_item['battery_charging'])){
                      ?>
                       <tr class="border-b">
                    <th class="text-left font-bold p-3 text-blue-700 text-lg">Battery</th>
                    </tr>
                    <tr>
                      <td class="text-gray-800 font-medium p-3">Charging</td>
                      <td class="p-3 text-gray-700">
                      <?= $category_item['battery_charging']?>
                      </td>
                    </tr>
                      <?php
                    }
                  ?>
                  

                   <!-- misc -->
                  <?php
                    if(!empty($category_item['color_phone'])){
                      ?>
                      <tr class="border-b">
                        <th class="text-left font-bold p-3 text-blue-700 text-lg">Misc</th>
                      </tr>
                      <tr>
                        <td class="text-gray-800 font-medium p-3">Colors</td>
                        <td class="p-3 text-gray-700">
                        <?= $category_item['color_phone']?>
                        </td>
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
    <!-- script link cdn -->
  <?php include('includes/footer.php')?>