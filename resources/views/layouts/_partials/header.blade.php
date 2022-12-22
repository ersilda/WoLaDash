<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Credit</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>
<!-- Header Section -->
<header class="main-header">
    <div class="logo">
        <img src="{{ asset('/storage/images/logo.png') }}" alt="">
    </div>
    <div class="nav">
        <ul>
            <li><a class="active" href="">Shop</a></li>
            <li><a href="">New collection</a></li>
            <li><a href="">Review</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
    <div class="user-acc">
        <ul>
            <li><a href=""><img src="{{ asset('/storage/images/cart.png') }}" alt=""></a></li>
            <li><a href=""><img src="{{ asset('/storage/images/not.png') }}" alt=""></a></li>
            <li class="user-info"><a href=""><img src="{{ asset('/storage/images/user.png') }}" alt=""> Rosie</a></li>
        </ul>
    </div>
</header>

<body class="antialiased">