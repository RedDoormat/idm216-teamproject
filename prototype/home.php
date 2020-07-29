<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prime Video</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <div class="logo">
        <img src="images/prime_logo.svg" class="logoimg">
    </div>
    <!-- top nav -->
    <ul>
        <li><a href="#">For You</a></li>
        <li><a href="#">Originals</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">TV</a></li>
        <li><a href="#">Prime</a></li>
    </ul>
    <!-- featured content -->
    <br></br>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/thevastofnight_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/paprika_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/trailofufos_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/aceofhearts_poster.jpg">
            </div>
            <div class="swiper-slide">
                <img src="images/astarisborn_poster.jpg">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <h3>Continue Watching</h3>
        
    <!-- bottom navigation -->
    <div class="navbar">
        <a href="index.html"><img src="images/icons/home.svg" class="svg"></a>
        <a href="#"><img src="images/icons/store.svg" class="svg"></a>
        <a href="#"><img src="images/icons/search.svg" class="svg"></a>
        <a href="#"><img src="images/icons/downloads.svg" class="svg"></a>
        <a href="#"><img src="images/icons/mystuff.svg" class="svg"></a>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 40,
        centeredSlides: true,
        grabCursor: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        });
    </script>
</body>
</html>