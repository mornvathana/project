<?php
    session_start();
    include('function/userfunction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- end css style -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- tailwind css link cdn -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- font awesome link cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
  <!-- css style link cdn -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <!-- css bubble swiper link -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- google font link cdn -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- ===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <!-- sweet alert -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.27/dist/sweetalert2.min.css">
  <!-- Swiper CSS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> -->
  <!-- cdn link flowbite tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <!-- header bakong QR -->
  <style>
    /* Price Range Slider */
    ::selection {
      color: #fff;
      background: #17A2B8;
    }

    .wrapper {
      width: 100%;
      height: auto;
      background: #fff;
      border-radius: 10px;
      /* padding: 20px 25px 40px; */
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
    }

    header h2 {
      font-size: 24px;
      font-weight: 600;
    }

    header p {
      margin-top: 5px;
      font-size: 16px;
    }

    .price-input {
      width: 100%;
      display: flex;
      margin: 30px 0 35px;
    }

    .price-input .field {
      display: flex;
      width: auto;
      /* height: ; */
      align-items: center;
    }

    .field input {
      width: auto;
      height: 100%;
      outline: none;
      font-size: 19px;
      margin-left: 12px;
      border-radius: 5px;
      text-align: center;
      border: 1px solid #999;
      -moz-appearance: textfield;
    }

    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }

    .price-input .separator {
      width: 50px;
      display: flex;
      font-size: 19px;
      align-items: center;
      justify-content: center;
    }

    .slider {
      height: 5px;
      position: relative;
      background: #ddd;
      border-radius: 5px;
    }

    .slider .progress {
      height: 100%;
      left: 25%;
      right: 25%;
      position: absolute;
      border-radius: 5px;
      background: #17A2B8;
    }

    .range-input {
      position: relative;
    }

    .range-input input {
      position: absolute;
      width: 100%;
      height: 5px;
      top: -5px;
      background: none;
      pointer-events: none;
      -webkit-appearance: none;
      -moz-appearance: none;
    }

    input[type="range"]::-webkit-slider-thumb {
      height: 17px;
      width: 17px;
      border-radius: 50%;
      background: #17A2B8;
      pointer-events: auto;
      -webkit-appearance: none;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }

    input[type="range"]::-moz-range-thumb {
      height: 17px;
      width: 17px;
      border: none;
      border-radius: 50%;
      background: #17A2B8;
      pointer-events: auto;
      -moz-appearance: none;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }

    /* Styling the custom range input for two handles */
    .range-container {
      position: relative;
      width: 100%;
      height: 10px;
      background-color: #e5e7eb;
      border-radius: 9999px;
    }

    .range-container input {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      width: 100%;
      height: 8px;
      background: transparent;
    }

    .range-container input::-webkit-slider-runnable-track {
      width: 100%;
      height: 8px;
      background: transparent;
    }

    .range-container input::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 20px;
      height: 20px;
      background: #144194 !important;
      /* Blue thumb */
      border-radius: 50%;
      opacity: 0.50;
      cursor: pointer;
      /* border: 2px solid #1d4ed8; Dark blue border */
    }

    .range-container input::-moz-range-thumb {
      width: 20px;
      height: 20px;
      background: white !important;
      /* Blue thumb */
      /* border-radius: 50%; */
      cursor: pointer;
      /* opacity: 0.50; */
      /* border: 2px solid #1d4ed8; Dark blue border */
    }

    .range-container .track {
      position: absolute;
      height: 100%;
      background: #144194 !important;
      border-radius: 9999px;
      opacity: 0.10;
    }

    /* main slider */
    .main {
      height: 80vh;
      width: 100%;
    }

    .wrapper,
    .slide {
      position: relative;
      width: 100%;
      height: 100%;
    }

    .slide {
      overflow: hidden;
    }

    .slide::before {
      content: "";
      position: absolute;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      z-index: 10;
    }

    .slide .image {
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .slide .image-data {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      width: 100%;
      z-index: 100;
    }

    .image-data span.text {
      font-size: 14px;
      font-weight: 400;
      color: #fff;
    }

    .image-data h2 {
      font-size: 45px;
      font-weight: 600;
      color: #fff;
    }

    a.button {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 25px;
      color: #333;
      background: #fff;
      text-decoration: none;
      margin-top: 25px;
      transition: all 0.3s ease;
    }

    a.button:hover {
      color: #fff;
      background-color: #c87e4f;
    }
  </style>

  <style>
    .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #333333;
      transition: opacity 0.75s, visibility 0.75s;
      z-index: 9999;
    }

    .loader--hidden {
      opacity: 0;
      visibility: hidden;
    }

    .loader::after {
      content: "";
      width: 75px;
      height: 75px;
      border: 15px solid #dddddd;
      border-top-color: #009578;
      border-radius: 50%;
      animation: loading 0.75s ease infinite;
    }

    @keyframes loading {
      from {
        transform: rotate(0turn);
      }

      to {
        transform: rotate(1turn);
      }
    }
    
    /* floating search box */
    .search-overlay {
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .search-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .search-box {
      transform: scale(0.95);
      opacity: 0;
      transition: all 0.3s ease;
    }

    .search-box.active {
      transform: scale(1);
      opacity: 1;
    }

    .search-results-container {
      max-height: 60vh;
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: #cbd5e0 #f7fafc;
    }

    .search-results-container::-webkit-scrollbar {
      width: 8px;
    }

    .search-results-container::-webkit-scrollbar-track {
      background: #f7fafc;
      border-radius: 4px;
    }

    .search-results-container::-webkit-scrollbar-thumb {
      background-color: #cbd5e0;
      border-radius: 4px;
    }

    .search-result-item:hover {
      background-color: #f8fafc;
    }

    .search-loader {
      border-top-color: #3b82f6;
      animation: spinner 0.8s linear infinite;
    }

    @keyframes spinner {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>

  <style>
  @keyframes fadeInScale {
  0% {
    opacity: 0;
    rotate: 45deg;
    transform: scale(0.95);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
  }

  .displayareapopup.show {
  animation: fadeInScale 0.5s ease-in-out forwards;
  }
  </style>

</head>

<body>
  <?php include('navbar.php')?>