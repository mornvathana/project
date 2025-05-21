<?php
    include('includes/header.php');

    include('../middleware/adminAccess.php');

    include('middleware/dashboard.php');

    include("lang.php");
?>
 <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
        <!-- end header -->
    <div class="h-full px-5 py-5 overflow-y-auto bg-[#f3f5f7] ">
    <div class="grid w-full grid-cols-2 gap-5 md:grid-cols-4 lg:gap-12">
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold"><?php echo $text['sale']?></span>/<?php echo $text['today']?></small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>145</strong>
                    <small><span class="font-bold text-green-500">12%</span> <?php echo $text['increase']?></small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold">Revenue</span>/<?php echo $text['today']?></small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>$3,246</strong>
                    <small><span class="font-bold text-green-500">7%</span> <?php echo $text['increase']?></small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold"><?php echo $text['customer']?></span>/<?php echo $text['today']?></small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-users"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>1,244</strong>
                    <small><span class="font-bold text-red-500">11%</span> <?php echo $text['decrease']?></small>
                </div>
            </div>
        </div>
        <div class="overflow-hidden border shadow-md rounded-xl">
            <!-- Box Header -->
            <div class="flex items-center w-full h-8 pl-5 bg-white">
                <small><span class="font-bold"><?php echo $text['sale']?></span>/<?php echo $text['today']?></small>
            </div>
            <div class="flex items-center h-[60px] bg-white justify-evenly">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <!-- Stats -->
                <div class="flex flex-col space-y-1">
                    <strong>145</strong>
                    <small><span class="font-bold text-green-500">12%</span> <?php echo $text['increase']?></small>
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
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ទិន្នន័យការលក់'
        },
        xAxis: {
            categories: ['USA', 'China', 'Brazil', 'EU', 'Argentina', 'India'],
            crosshair: true,
            accessibility: {
                description: 'Countries'
            }
        },
        tooltip: {
            valueSuffix: ' (1000 MT)'
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            {
                name: 'Corn',
                data: [387749, 280000, 129000, 64300, 54000, 34300]
            },
            {
                name: 'Wheat',
                data: [45321, 140000, 10000, 140500, 19500, 113500]
            }
        ]
    });
</script>
<script>
    Highcharts.chart('container1', {
        title: {
            text: 'Growth of Internet Users Worldwide (logarithmic scale)'
        },

        accessibility: {
            point: {
                valueDescriptionFormat:
                    '{xDescription}{separator}{value} million(s)'
            }
        },

        xAxis: {
            title: {
                text: 'Year'
            },
            categories: [1995, 2000, 2005, 2010, 2015, 2020, 2023]
        },

        yAxis: {
            type: 'logarithmic',
            title: {
                text: 'Number of Internet Users (in millions)'
            }
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br />',
            pointFormat: '{point.y} million(s)'
        },

        series: [{
            name: 'Internet Users',
            keys: ['y', 'color'],
            data: [
                [16, '#0000ff'],
                [361, '#8d0073'],
                [1018, '#ba0046'],
                [2025, '#d60028'],
                [3192, '#eb0014'],
                [4673, '#fb0004'],
                [5200, '#ff0000']
            ],
            color: {
                linearGradient: {
                    x1: 0,
                    x2: 0,
                    y1: 1,
                    y2: 0
                },
                stops: [
                    [0, '#0000ff'],
                    [1, '#ff0000']
                ]
            }
        }]
    });
</script>
<?php include('includes/footer.php')?>
      