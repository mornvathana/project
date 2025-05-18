<?php
    include('includes/header.php');

    include('../middleware/adminAccess.php');

    include('middleware/dashboard.php');
?>
 <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
        <!-- end header -->
    <div class="h-full px-5 py-5 overflow-y-auto bg-[#f3f5f7] ">
    <div class="grid w-full grid-cols-2 gap-5 md:grid-cols-4 lg:gap-12">
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Sale</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>145</strong>
                    <small><span class="font-bold text-green-500">12%</span> increase</small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Revenue</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>$3,246</strong>
                    <small><span class="font-bold text-green-500">7%</span> increase</small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Customer</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-users"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>1,244</strong>
                    <small><span class="font-bold text-red-500">11%</span> decrease</small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Sale</span>/Today</small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>145</strong>
                    <small><span class="font-bold text-green-500">12%</span> increase</small>
                </div>
            </div>
        </div>
    </div>
    <!-- end Card -->
     <div class = "grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-5 my-8">
        <div id="container" class = "bg-white rounded-md shadow-md"></div>
        <div id = "container1" class = "bg-white rounded-md shadow-md"></div>
     </div>
</div>  
<script>
    const chart = new Highcharts.Chart({
      chart: {
        renderTo: 'container',
        type: 'column',
        options3d: {
          enabled: true,
          alpha: 15,
          beta: 15,
          depth: 50,
          viewDistance: 25
        }
      },
      xAxis: {
        type: 'category'
      },
      yAxis: {
        title: {
          enabled: false
        }
      },
      tooltip: {
        headerFormat: '<b>{point.key}</b><br>',
        pointFormat: 'Cars sold: {point.y}'
      },
      title: {
        text: 'Top Sell Report'
      },
      legend: {
        enabled: false
      },
      plotOptions: {
        column: {
          depth: 25
        }
      },
      series: [{
        data: [
          ['Toyota', 1795],
          ['Volkswagen', 1242],
          ['Volvo', 1074],
          ['Tesla', 832],
          ['Hyundai', 593],
          ['MG', 509],
          ['Skoda', 471],
          ['BMW', 442],
          ['Ford', 385],
          ['Nissan', 371]
        ],
        colorByPoint: true
      }]
    });

    function showValues() {
      document.getElementById('alpha-value').innerText = chart.options.chart.options3d.alpha;
      document.getElementById('beta-value').innerText = chart.options.chart.options3d.beta;
      document.getElementById('depth-value').innerText = chart.options.chart.options3d.depth;
    }

    document.querySelectorAll('#sliders input').forEach(input => {
      input.addEventListener('input', e => {
        chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
        showValues();
        chart.redraw(false);
      });
    });

    showValues();
  </script>
   <script>
    Highcharts.chart('container1', {
      chart: {
        type: 'pie',
        backgroundColor: 'transparent',
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
        text: 'Best Item Sell Report'
      },
      series: [{
        name: 'Medals',
        data: [
          ['Norway', 16],
          ['Germany', 12],
          ['USA', 8],
          ['Sweden', 8],
          ['Netherlands', 8],
          ['ROC', 6],
          ['Austria', 7],
          ['Canada', 4],
          ['Japan', 3]
        ]
      }]
    });
  </script>
<?php include('includes/footer.php')?>
      