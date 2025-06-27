<?php
ob_start(); // Start output buffering
ob_clean();
 include('../function/myfunction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src = "assets/js/tailwindcss.js"></script>
    <script src = "assets/js/jquery.min.js"></script>
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    
     <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Then load 3D module -->
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <!-- toastr alert -->
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- khmer font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">  
    <style>
        *{
            font-family: "Roboto", sans-serif ,"Battambang";
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }
        .shadow-style {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid;
            border-color: #FF3D00 transparent;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
            }

            @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
            }
            #container {
            margin-bottom: 30px;
            height: 400px;
            }
            #sliders {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
            }
            .slider-group {
            display: flex;
            align-items: center;
            gap: 10px;
            }
            label {
            width: 60px;
            }
            input[type="range"] {
            flex: 1;
            }
            .chart-card {
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
          }

          .chart-title {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            text-align: center;
          }

          .chart-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
          }

          #container1 {
            height: 400px;
          }
          #container2 {
            width: 100%;
            max-width: 800px;
            height: 500px;
            margin: 50px auto;
          }
          #container3 {
            width: 100%;
            max-width: 800px;
            height: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

          h1 {
              text-align: center;
              color: #333;
          }
    </style>
</head>
<body>
<div class = "w-full h-[100vh] grid grid-cols-1 lg:grid-cols-[149px_1fr] ">
    <?php include('slidebar.php')?>
    <?php include('navbar.php')?>

