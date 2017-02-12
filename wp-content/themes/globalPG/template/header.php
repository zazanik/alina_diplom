<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.fancybox.pack.js"></script>



</head>
<body>
<div class="wrapper">

<header>
    <div class="h-page">
        <div class="container">
<!--            <button class="hamburger">&#9776;</button>-->
            <button class="hamburger"><img src="<?php echo get_template_directory_uri();?>/images/hamburger.png" alt=""/></button>
            <button class="cross">&#735;</button>
            <nav id="navigation">
                <ul>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Выставки</a></li>
                    <li><a href="#">Компании</a></li>
                    <li><a href="#">Партнеры</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
            <div class="lang">
                <a href="#">ru</a>
                <ul>
                    <li><a href="#">ru</a></li>
                    <li><a href="#">en</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="b-page">
        <div class="container">
            <h1><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo"/></a></h1>
            <div class="phone"></div>
            <form action="#">
                <input name="search" type="search">
                <input type="submit" value="">
            </form>
            <div class="phone-tel">
                <a href="tel:+995685109885">+ 995 685 10 98 85</a>
                <a href="tel:+995571088834">+ 995 571 08 88 34</a>
            </div>
        </div>
    </div>
</header>
