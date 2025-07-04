<?php
    include("includes/header.php");
    include('../middleware/adminAccess.php');
    include("lang.php");
?>
<div class="h-full px-2 py-2 bg-[#f3f5f7]">
    <div class="w-full rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center mb-3">
            <div>
                <h1 class="font-medium "><?php echo $text['productreport']?></h1>
            </div>
        </div>
        <div class = "w-full h-[250px]  grid grid-cols-1 md:grid-cols-2 gap-5 overflow-hidden">
            <div id = "container1" class = "w-full rounded-md">
            </div>
            <div class = "w-full h-[250px] shadow-md bg-white  overflow-y-auto">
                <div class = "w-full h-[15%] bg-[#eee] grid grid-cols-2">
                  <div class = "flex justify-center gap-1 items-center">
                    <span class = "font-medium text-md"><?php echo $text['name']?></span>
                  </div>
                   <div class = "flex justify-center items-center">
                    <span class = "font-medium text-md"><?php echo $text['total']?></span>
                  </div>
                </div>
                <!--  -->
                <div class = "w-full h-[90%] grid grid-cols-2 my-2">
                  <?php
                    $item = getAll("product");
                    if($item->num_rows > 0){
                      foreach($item as $name){
                        ?>
                        <div class = "text-center">
                          <?=  $name['name']?>
                        </div>
                        <?php
                          $count = countProduct("product_detail",$name['name']);
                          $data[] = [$name['name'],(int)$count];
                          ?>
                          <div class = "text-center">
                            <?= $count?>
                          </div>
                          <?php
                        ?>
                        <?php
                      }
                    }
                  ?>
                </div>
            </div>
        </div>
        <?php
          $data = [];
          $item = getAll("brands");
          if($item->num_rows > 0){
            foreach($item as $name){
              ?>
              <?php
                $count = countProduct1("product_detail",$name['id']);
                $data[] = [$name['name'],(int)$count];
              ?>
              <?php
            }
          }
          $jsonData = json_encode($data);
        ?>
        <div class = "h-[8%] w-full flex justify-between items-center mt-3">
          <div>
            <ul class = "flex">
                <li class = "mx-1">
                    <a  class="bg-white text-[12px] border-[1px] border-gray-500 text-white px-1 py-1 lg:px-2 lg:py-2 font-medium rounded-md"><button type = "button" class = "text-[#646a7a]" id="exportExcelBtn" name = "button"><span><i class="fas fa-download"></i></span> <span>Excel</span></button></a>
                </li>
                <li class = "mx-1">
                    <a class="bg-white text-[12px] border-[1px] border-gray-500 text-white px-1 py-1 lg:px-2 lg:py-2 font-medium rounded-md"><button type = "button" name = "button" class = "text-[#646a7a]" id = "printBtn"><span><i class="fas fa-print"></i></span> <span>Print</span></button></a>
                </li>
            </ul>
            </div>
            <div>
               <ul class="flex">
                        <li class = "">
                        <!-- next  -->
                        <div class = "flex gap-3">
                        <form class="max-w-sm">
                        <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                            <option value="10" selected><?php echo $text['page']?></option>
                            <option value="10">10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                       </form>
                       <form class="max-w-sm">
                        <select id="filter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                            <option value="10" selected><?php echo $text['filter']?></option>
                            <option value="asc">A - Z</option>
                            <option value="desc">Z - A</option>
                        </select>
                       </form>
                        </div>
                       
                        <!-- back button -->
                        </li>
                    </ul>
            </div>
        </div>
        <div class = "bg-white h-[50%] w-full mt-2" id = "printArea">
          <table class="text-center w-full table-auto bg-white relative" id = "myTable">
                <thead>
                    <tr class = "bg-[#f6f8fa] text-center">
                      <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">​<?php echo $text['id']?></th>
                      <th width="30" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">​<?php echo $text['barcode']?></th>
                      <th width="100" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">​<?php echo $text['name']?></th>
                      <th width="60" class="py-2 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">​<?php echo $text['created']?></th>
                  </tr>
                </thead>
                <tbody id = "displayData">


                </tbody>
          </table>
        </div>
        <div class = " w-full h-[10px] flex justify-end items-center my-5">
                <div class="flex items-center gap-2">
                  <!-- Pagination Buttons -->
                  <a href="#" class="flex items-center justify-center px-2 h-7 me-3 text-[10px] md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="back_btn">
                      <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                      </svg>
                    ​<?php echo $text['previous']?>
                  </a>

                  <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-[10px] md:text-sm font-medium text-gray-500 rounded-lg">
                      <span id="startPage">1</span> / <span id="totalPage">10</span>
                  </a>

                  <a href="#" class="flex items-center justify-center px-2 h-7 text-[10px] md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="next_btn">
                      <?php echo $text['next']?>
                      <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                      </svg>
                  </a>
              </div>
          </div>
    </div>
</div>
<script src = "assets/js/product.js"></script>
 <script src="assets/js/excel.js"></script>
  <script>
    const chartData = <?= $jsonData ?>;
    Highcharts.chart('container1', {
      chart: {
        type: 'pie',
        backgroundColor: '#ffffff',
        height: 250,
        options3d: {
          enabled: true,
          alpha: 45,
          beta: 0
        }
      },
      title: { text: null },
      subtitle: { text: null },
      credits: { enabled:true },
      tooltip: {
        pointFormat: '<b>{point.name}</b>: {point.y} medals'
      },
      plotOptions: {
        pie: {
          innerSize: 100,
          depth: 45,
          dataLabels: {
            enabled: true,
            format: '{point.name}: {point.y}',
            style: {
              fontSize: '12px',
              color: 'black',
            }
          }
        }
      },
       title: {
        text: 'ទំនិញសរុប'
      },
      series: [{
        name: 'Medals',
        data: chartData,
      }]
    });
  </script>
<?php
    include("includes/footer.php");
?>