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
    <!-- aba -->
    <link rel="stylesheet" href="https://payway.ababank.com/checkout-popup.html?file=css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://payway-staging.ababank.com/checkout-popup.html?file=css"/>
     <!-- end aba link  -->
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- cdn link flowbite tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <!-- header bakong QR -->
    <script src="https://github.com/davidhuotkeo/bakong-khqr/releases/download/bakong-khqr-1.0.6/khqr-1.0.6.min.js"></script>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQOuDJCfz1KVRuAK9Au5YLL2LgG5Z9Qw5l6wD0UBZnZBq4oIat6qNfxa7" crossorigin="anonymous">
    <style>
         /* ===== Google Font Import - Poformsins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    html{
        scroll-behavior: smooth;
    }
    
    /* menu (index.html)*/
    .menu li{
        transition: all 0.3s linear;
    }
    .menu li:hover{
        color: #144194;
    }
    .menu li .sub-menu li{
        transition: all 0.3s linear;
    }
    .menu li .sub-menu li:hover{
        color: #144194;
    }
    .menu li:hover .sub-menu{
        display: grid;
        animation: slideDown 0.3s ease-out;
    }
    @keyframes slideDown{
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* main slide (index.html)*/
    .main-slide .slide{
        width: 100%;
        /* height: 500px; */
        overflow: hidden;
    }
    .slide .itemSlide{
        width: 100%;
        height: 100%;
        /* background-color: black; */
        /* margin-top: 1%; */
        border-radius: 8px;
    }
    .itemSlide .wrapperSlide{
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
        /* border-radius: 10px; */
    }
    /* .itemSlide .wrapperSlide .item{
        width: 100%;
        height: 100%;
        position: relative;
    } */
    .itemSlide .wrapperSlide .imageslide{
        width: 100%;
        height: 100%;
    }
    .itemSlide .wrapperSlide .imageslide img{
        width: 100%;
        height: 100%;
        object-fit: fill;
    }
    .itemSlide .wrapperSlide  .tbnSlideBack{
        width: 50px;
        height: 50px;
        position: absolute;
        /* background-color: green; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* font-size: 30px; */
        color: #FFF;
        border-radius: 50%;
        transition: .2s ease;
        top: 50%;
        left: -66px;
        transform: translateY(-50%);
    }
    .itemSlide .wrapperSlide:hover .tbnSlideBack{
        left: 5px;
    }
    .itemSlide .wrapperSlide .tbnSlideNext{
        width: 50px;
        height: 50px;
        position: absolute;
        /* background-color: green; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* font-size: 30px; */
        color: #FFF;
        border-radius: 50%;
        transition: .2s ease;
        top: 50%;
        right: -66px;
        transform: translateY(-50%);
    }
    .itemSlide .wrapperSlide:hover .tbnSlideNext{
        right: 5px;
    }
    .itemSlide .wrapperSlide .tbnSlideBack:hover{
        /* background-color: #EBF400; */
        box-shadow: 1px 2px 2px gray;
        color: black;
        cursor: pointer;
    }
    .itemSlide .wrapperSlide .tbnSlideNext:hover{
        /* background-color: #EBF400; */
        box-shadow: 1px 2px 2px gray;
        color: black;
        cursor: pointer;
    }
    
    /* featured-product (index.html)*/
    .product-box .box{
        transition: all 0.3s linear;
    }
    .product-box .box:hover{
        scale: 1.05;
    }
    .product-box .box .line::before{
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 3px;
        /* width: 100%; */
        background-color: #144194;
        transition: transform 300ms ease-in-out;
        transform: scaleX(0);
        opacity: 0.85;
    }
    .product-box .box:hover .line::before,
    .product-box .box:focus .line::before
    {
        transform: scaleX(1);
    }
    .product-box .box button{
        transition: all 0.3s linear;
    }
    .product-box .box button:hover{
        background-color: #144194;
        color: #fff;
        opacity: 0.85;
    }
    /* end of featured-product (index.html)*/
    
    /* new-arrival (index.html)*/
    .new-arrival ul li{
        cursor: pointer;
    }
    .new-arrival ul li.active{
        color: black;
        opacity: 0.85;
        border: 1px solid #b2babb ;
    }
    .new-arrival .box a .tittle{
        transition: all 0.5s linear;
    
    } 
    .new-arrival .box:hover a .tittle{
        transform: translateY(-20px);
    
    } 
    .new-arrival .box a .tittle{
        transition: all 0.5s linear;
    
    } 
    .new-arrival .box:hover a .tittle{
        transform: translateY(-20px);
    
    } 
    .new-arrival .box .tittle .name-pro{
        transition: all 0.3s linear;
    }
    .new-arrival .box .tittle .name-pro:hover{
        color: chocolate;
    }
    /* end of new-arrival (index.html)*/
    .new-arrival .page.active{
        display: grid;
    }
    
    /* pagination (products.html)*/
    .pagination ul li:nth-child(2) a{
        background-color: #3b82f6;
        color: #fff;
    }
    
    /* menu-responsive */
    #menu{
        display: none;
    }
    
    #menu .sub-menu {
        display: none;
    }
    
    /* box shadow of product box */
    .box-shadow-custom{
        box-shadow: 9px 0px 20px -15px rgba(102.60631793478261, 129.95849918589025, 255, 0.35);
    }
    
    /* navbar-shadow */
    .box-shadow{
        box-shadow: 0px 5px 32px -25px rgba(0,0,0,0.5);
    }
    
    /* table of product-cart */
    table {
        width: 100%;
        margin: 0px auto;
        /* border-collapse: collapse; */
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    td img {
        width: 70px;
        height: auto;
    }
    
    
        
        main {
        padding-block: 2rem;
        }
    
        /* pro-detail-slider */
        .slide-container{
        max-width: 100%;
        }
        .slide-content{
        margin: 10px 0px;
        overflow: hidden;
        }
        .child-img{
        border-radius: 5px;
        overflow: hidden;
        }
        
        .card-image .card-img{
        height: auto;
        width: 100%;
        }
        .active-box-img{
        border: 1px solid #3b82f6;
        }
        .swiper-navBtn{
        color: black;
        transition: color 0.3s ease;
        }
        .swiper-navBtn:hover{
        color: black;
        }
        .swiper-navBtn::before,
        .swiper-navBtn::after{
        font-size: 35px;
        }
        .swiper-button-next{
        right: 0;
        }
        .swiper-button-prev{
        left: 0;
        }
        /* end of pro-detail-slider */
    
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
            background: #144194 !important; /* Blue thumb */
            border-radius: 50%;
            opacity: 0.50;
            cursor: pointer;
            /* border: 2px solid #1d4ed8; Dark blue border */
        }
        .range-container input::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: white !important; /* Blue thumb */
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
    
    
    /* register and login form */
    .form-body {
        /* padding: 70px; */
        /* height: 100vh; */
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: blue; */
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
    }
    
    .Container {
        /* position: relative; */
        /* max-width: 430px; */
        /* width: 40%; */
        background: #fff;
        border-radius: 10px;
        /* box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); */
        border: 1px solid #d1d5db;
        overflow: hidden;
        /* margin: 0 20px; */
    }
    
    .Container .forms {
        display: flex;
        align-items: center;
        height: auto;
        width: 200%;
        transition: height 0.2s ease;
        /* background-color: #144194; */
    }
    
    
    .Container .form {
        /* height: 550px; */
        width: 50%;
        padding: 0px 30px;
        background-color: #fff;
        transition: margin-left 0.18s ease;
        /* background-color: #265df2; */
    }
    
    .Container.active .login {
        margin-left: -50%;
        opacity: 0;
        transition: margin-left 0.18s ease, opacity 0.15s ease;
    }
    
    .Container .signup {
        opacity: 0;
        transition: opacity 0.09s ease;
    }
    
    .Container.active .signup {
        opacity: 1;
        transition: opacity 0.2s ease;
    }
    
    .Container.active .forms {
        height: auto;
        padding: 20px 0px;
    }
    
    .Container .form .title {
        position: relative;
        font-size: 27px;
        font-weight: 600;
        color: #374151 !important;
        /* text-align: center; */
        /* width: 100%; */
    }
    
    /* .form .title::before {
        content: '';
        position: absolute;
        left: 230px;
        bottom: 0;
        height: 3px;
        width: 30px;
        background-color: #4070f4;
        border-radius: 25px;
    } */
    
    .form .input-field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 30px;
    }
    
    .input-field input {
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
        transition: all 0.2s ease;
    }
    
    .input-field input:is(:focus, :valid) {
        border-bottom-color: #4070f4;
    }
    
    .input-field i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }
    
    .input-field input:is(:focus, :valid)~i {
        color: #4070f4;
    }
    
    .input-field i.icon {
        left: 0;
    }
    
    .input-field i.showHidePw {
        right: 0;
        cursor: pointer;
        padding: 10px;
    }
    
    .form .checkbox-text {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }
    
    .checkbox-text .checkbox-content {
        display: flex;
        align-items: center;
    }
    
    .checkbox-content input {
        margin-right: 10px;
        accent-color: #4070f4;
    }
    
    .form .text {
        color: #333;
        font-size: 14px;
    }
    
    .form a.text {
        color: #4070f4;
        text-decoration: none;
    }
    
    .form a:hover {
        text-decoration: underline;
    }
    
    .form .button {
        margin-top: 35px;
    }
    
    .form .button input {
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #4070f4;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .button input:hover {
        background-color: #265df2;
    }
    
    .form .login-signup {
        margin-top: 30px;
        text-align: center;
    }
    
    .line-form{
        position: relative;
        height: 1px;
        width: 100%;
        margin: 36px 0;
        background-color: #d4d4d4;
    }
    .line-form::before{
        content: 'Or';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #FFF;
        color: #8b8b8b;
        padding: 0 15px;
    }
    .media-options a{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    img.google-img{
        /* position: absolute; */
        /* top: 50%; */
        left: 15px;
        /* transform: translateY(-50%); */
    }
    img.google-img{
        height: 24px;
        width: 24px;
        object-fit: cover;
    }
    a.google{
        border: 1px solid #CACACA;
    }
    a.google span{
        font-weight: 500;
        opacity: 0.6;
        color: #232836;
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
        
        /* swiper button css */
        .nav-btn {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        /* background: rgba(255, 255, 255, 0.3); */
        }
        .nav-btn:hover {
        /* background: rgba(255, 255, 255, 0.4); */
        }
        .swiper-button-next {
        right: 50px;
        }
        .swiper-button-prev {
        left: 50px;
        }
        .nav-btn::before,
        .nav-btn::after {
        font-size: 25px;
        color: #fff;
        }
        .swiper-pagination-bullet {
        opacity: 1;
        height: 12px;
        width: 12px;
        background-color: #fff;
        visibility: hidden;
        }
        .swiper-pagination-bullet-active {
        border: 2px solid #fff;
        background-color: #c87e4f;
        }
        
        @media screen and (max-width: 768px) {
        .nav-btn {
            /* visibility: hidden; */
        }
        .swiper-pagination-bullet {
            visibility: visible;
        }
        }
        
        /* footer animation */
        .wave {
        position: absolute;
        /* top: 30vh; */
        left: 0;
        width: 100%;
        height: 100px;
        /* Adjust the height as needed */
        background: url('https://www.khmer24.com/icon/khmer24_footer.png');
        /* filter:grayscale(100%); */
        background-size: 1000px 100px;
        /* background-color: #144194; */
        /* filter: grayscale(100%); */
        /* z-index: 1; */
    }
    
    /* Place it behind the footer content */
    .wave#wave1 {
        z-index: 1000;
        opacity: 1;
        bottom: 0;
        animation: animateWave 50s linear infinite;
    }
    
    .wave#wave2 {
        z-index: 999;
        opacity: 0.5;
        bottom: 10px;
        animation: animateWave_02 4s linear infinite;
    }
    
    .wave#wave3 {
        z-index: 1000;
        opacity: 0.2;
        bottom: 0;
        animation: animateWave 3s linear infinite;
    }
    
    .wave#wave4 {
        z-index: 999;
        opacity: 0.7;
        bottom: 20px;
        animation: animateWave_02 3s linear infinite;
    }
    
    @keyframes animateWave {
        0% {
            background-position-x: 1000px;
        }
    
        100% {
            background-position-x: 0px;
        }
    }
    
    @keyframes animateWave_02 {
        0% {
            background-position-x: 0px;
        }
    
        100% {
            background-position-x: 1000px;
        }
    }
    
    .profile-block .menu #righ_button li.active{
        color:#265df2;
    }
    
    </style>
</head>
<body>
    <?php include('navbar.php')?>
