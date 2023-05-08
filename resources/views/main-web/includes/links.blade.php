<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">



<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furnitica - Minimalist Furniture HTML Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/font-material/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('libs/owl-carousel/assets/owl.carousel.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('main_website_assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('main_website_assets/css/reponsive.css')}}">
</head>
<style>
    .modal-dialog {
        max-width: 900px;
        height: 450px;
        padding: 20 30px 30px 30px;
        margin-top: 60px;
    }
    .modal-body{
        font-family: Arial;
    }
    .login-btn{
position: absolute;
       z-index: 500;
        right: 10px;
        top: 40px;
    }
    .review-section{
        width: 800px;
    }

    .door_types {
        display: flex;
        gap: 3px;

    }
    .swing_type {
        display: flex;
        gap: 3px;

    }
    .radio.door_size,
    .radio.architrave,
    .radio.handle_type {
        display: inline-block;
        margin-right: 10px; /* optional margin between the items */
    }
    .lock-type .radio {
        display: inline-block;
        margin-right: 10px;
    }
         /*Adding Borders around images*/
         /* CSS code */
     #door-types label img {
         border: 2px solid transparent;
     }
    #door-types label img.checked {
        border: 2px solid blue;
    }
    .color_type label img {
        border: 2px solid transparent;
    }

    .color_type label img.checked {
        border: 2px solid blue;
    }

    .door_size label img {
        border: 2px solid transparent;
    }

    .door_size label img.checked {
        border: 2px solid blue;
    }
    .swing_type label img {
        border: 2px solid transparent;
    }

    .swing_type label img.checked {
        border: 2px solid blue;
    }
    .architrave label img {
        border: 2px solid transparent;
    }

    .architrave label img.checked {
        border: 2px solid blue;
    }
    .handle_type label img {
        border: 2px solid transparent;
    }

    .handle_type label img.checked {
        border: 2px solid blue;
    }
    .lock-type label img {
        border: 2px solid transparent;
    }

    .lock-type label img.checked {
        border: 2px solid blue;
    }


    .feature-option-container {
        display: inline-block;
        position: relative;
    }

    figcaption {
        position: absolute;
        margin-bottom: 60px;
        left: 0;
        width: 100%;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
    }
    .product-feature {
    }

    .product-feature.active {
        border: 2px solid red; /* highlighted border style */
    }









</style>
