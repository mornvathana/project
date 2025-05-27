<?php
    include('includes/header.php');

    include('../middleware/adminAccess.php');

    include('../config/dbcon.php');

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
                        <strong>
                            <?php
                                $today = date('Y-m-d');
                                $sql = "SELECT COUNT(*) as total_orders FROM orders WHERE DATE(created_at) = '$today'";
                                $result = mysqli_query($conn,$sql);
                                $data = mysqli_fetch_assoc($result);
                                ?>
                                <?php echo $data['total_orders']?>
                                <?php
                            ?>
                        </strong>
                            <?php
                                $yesterday = date('Y-m-d', strtotime('-1day'));
                                $sql = "SELECT COUNT(*) as yes_orders FROM orders WHERE DATE(created_at) = '$yesterday'";
                                $result = mysqli_query($conn,$sql);
                                $data = mysqli_fetch_assoc($result);

                                $today = date('Y-m-d');
                                $sql1 = "SELECT COUNT(*) as today_orders FROM orders WHERE DATE(created_at) = '$today'";
                                $result1 = mysqli_query($conn,$sql1);
                                $data1 = mysqli_fetch_assoc($result1);

                                if($data1['today_orders'] > $data['yes_orders']){

                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                                        ?>
                                    <small><span class="font-bold text-green-500"><?= $customer ?></span> <?php echo $text['increase']?></small>
                                    <?php
                                }else if($data1['today_orders'] < $data['yes_orders']){
                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                                        ?>
                                     <small><span class="font-bold text-red-500"><?= $customer ?></span> <?php echo $text['decrease']?></small>
                                    <?php
                                }else if($data1['today_orders'] == $data['yes_orders']){
                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                                        ?>
                                     <small><sp class="font-bold text-green-500"><?php echo $text['equal']?></small>
                                    <?php
                                }
                            ?>
                        
                    </div>
                </div>
            </div>
            <div class="overflow-hidden border shadow-md rounded-xl">
                <!-- Box Header -->
                <div class="flex items-center w-full h-8 pl-5 bg-white">
                    <small><span class="font-bold"><?php echo $text['revenue']?></span>/<?php echo $text['today']?></small>
                </div>
                <div class="flex items-center h-[60px] bg-white justify-evenly">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <!-- Stats -->
                    <div class="flex flex-col space-y-1">
                        <strong>
                            <?php
                                $today = date('Y-m-d');
                                $sql = "SELECT SUM(total_price) as revenue FROM orders WHERE DATE(created_at) = '$today'";
                                $result = mysqli_query($conn,$sql);
                                $data = mysqli_fetch_assoc($result);
                                ?>
                                <?php echo $data['revenue'] ?? 0?>
                                <?php
                            ?>
                        </strong>
                        <?php
                                $yesterday = date('Y-m-d', strtotime('-1 day'));
                                $sql = "SELECT SUM(total_price) as yes_orders FROM orders WHERE DATE(created_at) = '$yesterday'";
                                $result = mysqli_query($conn,$sql);
                                $data = mysqli_fetch_assoc($result);

                                $today = date('Y-m-d');
                                $sql1 = "SELECT SUM(total_price) as today_orders FROM orders WHERE DATE(created_at) = '$today'";
                                $result1 = mysqli_query($conn,$sql1);
                                $data1 = mysqli_fetch_assoc($result1);

                                if($data1['today_orders'] > $data['yes_orders']){

                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                    
                                    ?>
                                     <small><span class="font-bold text-green-500">$<?= $customer ?></span> <?php echo $text['increase']?></small>
                                    <?php

                                }else if($data1['today_orders'] < $data['yes_orders']){

                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                                        ?>
                                     <small><span class="font-bold text-red-500"><?= $customer ?></span> <?php echo $text['decrease']?></small>
                                    <?php
                                }else if($data1['today_orders'] == $data['yes_orders']){
                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                                        ?>
                                     <small><sp class="font-bold text-green-500"><?php echo $text['equal']?></small>
                                    <?php
                                }
                            ?>
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
                        <strong>
                            <?php
                                $today = date('Y-m-d');
                                $sql = "SELECT COUNT(user_id) as total_user FROM orders WHERE DATE(created_at) = '$today'";
                                $result = mysqli_query($conn,$sql);
                                $data = mysqli_fetch_assoc($result);
                                ?>
                                <?php echo $data['total_user']?>
                                <?php
                            ?>
                        </strong>
                        <?php
                                $yesterday = date('Y-m-d', strtotime('-1 day'));
                                $sql = "SELECT COUNT(user_id) as yes_orders FROM orders WHERE DATE(created_at) = '$yesterday'";
                                $result = mysqli_query($conn,$sql);
                                $data = mysqli_fetch_assoc($result);

                                $today = date('Y-m-d');
                                $sql1 = "SELECT COUNT(user_id) as today_orders FROM orders WHERE DATE(created_at) = '$today'";
                                $result1 = mysqli_query($conn,$sql1);
                                $data1 = mysqli_fetch_assoc($result1);

                                if($data1['today_orders'] > $data['yes_orders']){

                                    $customer = $data1['today_orders'] - $data['yes_orders'];

                                    ?>
                                     <small><span class="font-bold text-green-500"><?= $customer ?></span> <?php echo $text['increase']?></small>
                                    <?php

                                }else if($data1['today_orders'] < $data['yes_orders']){
                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                    ?>
                                     <small><span class="font-bold text-red-500"><?= $customer ?></span> <?php echo $text['decrease']?></small>
                                    <?php
                                }else if($data1['today_orders'] == $data['yes_orders']){
                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                                        ?>
                                     <small><sp class="font-bold text-green-500"><?php echo $text['equal']?></small>
                                    <?php
                                }
                            ?>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden border shadow-md rounded-xl">
                <!-- Box Header -->
                <div class="flex items-center w-full h-8 pl-5 bg-white">
                    <small><span class="font-bold"><?php echo $text['sellproduct']?></span>/<?php echo $text['today']?></small>
                </div>
                <div class="flex items-center h-[60px] bg-white justify-evenly">
                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-50">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <!-- Stats -->
                    <div class="flex flex-col space-y-1">
                        <strong>
                        <?php
                            $today = date('Y-m-d');
                            $sql = "SELECT COUNT(cart_id) as total_cart FROM orders WHERE DATE(created_at) = '$today'";
                            $result = mysqli_query($conn,$sql);
                            $data = mysqli_fetch_assoc($result);
                            ?>
                            <?php echo $data['total_cart']?>
                            <?php
                        ?>
                        </strong>
                        <?php
                                $yesterday = date('Y-m-d', strtotime('-1 day'));
                                $sql = "SELECT COUNT(cart_id) as yes_orders FROM orders WHERE DATE(created_at) = '$yesterday'";
                                $result = mysqli_query($conn,$sql);
                                $data = mysqli_fetch_assoc($result);

                                $today = date('Y-m-d');
                                $sql1 = "SELECT COUNT(cart_id) as today_orders FROM orders WHERE DATE(created_at) = '$today'";
                                $result1 = mysqli_query($conn,$sql1);
                                $data1 = mysqli_fetch_assoc($result1);

                                if($data1['today_orders'] > $data['yes_orders']){

                                    $customer = $data1['today_orders'] - $data['yes_orders'];

                                    ?>
                                     <small><span class="font-bold text-green-500"><?= $customer ?></span> <?php echo $text['increase']?></small>
                                    <?php
                                                        
                                    
                                }else if($data1['today_orders'] < $data['yes_orders']){
                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                    ?>
                                     <small><span class="font-bold text-red-500"><?= $customer ?></span> <?php echo $text['decrease']?></small>
                                    <?php
                                }else if($data1['today_orders'] == $data['yes_orders']){
                                    $customer = $data1['today_orders'] - $data['yes_orders'];
                                    ?>
                                     <small><sp class="font-bold text-green-500"><?php echo $text['equal']?></small>
                                    <?php
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    <!-- end Card -->
     <div class = "grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-5 my-8">
        <div id="container" class = "bg-white rounded-md shadow-md"></div>
        <div id = "container1" class = "bg-white rounded-md shadow-md"></div>
     </div>
     <?php
        $data = [];
        $sql = "SELECT DATE_FORMAT(created_at,'%M') as month, SUM(total_price) as total 
                FROM orders 
                WHERE YEAR(created_at) = YEAR(CURDATE()) 
                GROUP BY MONTH(created_at) 
                ORDER BY MONTH(created_at)";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = [$row['month'], (float)$row['total']];
        }
        $jsonData = json_encode($data);
        ?>
        <?php
        $data1 = [];
        $sql = "SELECT DATE_FORMAT(created_at,'%M') as month, COUNT(cart_id) as total 
                FROM orders 
                WHERE YEAR(created_at) = YEAR(CURDATE()) 
                GROUP BY MONTH(created_at) 
                ORDER BY MONTH(created_at)";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data1[] = [$row['month'], (float)$row['total']];
        }
        $jsonData1 = json_encode($data1);
        ?>

</div> 
<script>
    const chartData = <?= $jsonData ?>;
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
            title: {
                text: 'Monthly Sales Report for ' + new Date().getFullYear()
            },
            subtitle: {
                text: ''
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
                pointFormat: 'Total Sales: ${point.y:.2f}'
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
                data: chartData,
                colorByPoint: true
            }]
        });

        function showValues() {
            document.getElementById('alpha-value').innerHTML = chart.options.chart.options3d.alpha;
            document.getElementById('beta-value').innerHTML = chart.options.chart.options3d.beta;
            document.getElementById('depth-value').innerHTML = chart.options.chart.options3d.depth;
        }

        document.querySelectorAll('#sliders input').forEach(input =>
            input.addEventListener('input', e => {
                chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
                showValues();
                chart.redraw(false);
            })
        );

        showValues();
</script> 
<script>
    const chartData1 = <?= $jsonData1 ?>;

    Highcharts.chart('container1', {
        title: {
            text: 'Monthly Order Count (logarithmic scale)'
        },
        accessibility: {
            point: {
                valueDescriptionFormat:
                    '{xDescription}{separator}{value} order(s)'
            }
        },
        xAxis: {
            title: {
                text: 'Month'
            },
            categories: chartData1.map(item => item[0])
        },
        yAxis: {
            type: 'logarithmic',
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br />',
            pointFormat: '{point.y} order(s)'
        },
        series: [{
            name: 'Orders',
            data: chartData1.map(item => item[1]),
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
      