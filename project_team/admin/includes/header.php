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
    <script src = "assets/js/fontawesome.css"></script>
    <script src = "assets/js/jquery.min.js"></script>
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
    <style>
        *{
            font-family: "Roboto", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }
        .shadow-style {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
<div class = "w-full h-[100vh] grid grid-cols-1 lg:grid-cols-[149px_1fr] ">
    <?php include('slidebar.php')?>
    <?php include('navbar.php')?>

