<?php

include 'connection.php';
session_start();
$admin_id = $_SESSION['user_name'];

if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}

?>
<style>
    <?php
    include 'main.css';
    ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <title>Home Page</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="">
                <div class="slider-caption">
                    <span>Test The Quality</span>
                    <h1>Organic Premium <br>Honey</h1>
                    <p>Enjoy sweet honey made by people of ecologically clean raw materials in the most pur environment!</p>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="">
                <div class="slider-caption">
                    <span>Test The Quality</span>
                    <h1>Organic Premium <br>Honey</h1>
                    <p>Enjoy sweet honey made by people of ecologically clean raw materials in the most pur environment!</p>
                    <a href="shop.php" class="btn">Go to Shop</a>
                </div>
            </div>
        </div>
        <div class="controls">
            <i class="bi bi-chevron-left prev"></i>
            <i class="bi bi-chevron-right next"></i>
        </div>
    </div>
    <div class="line"></div>
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="script2.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.hero-slider').slick({
                autoplay: true,
                infinite: false,
                speed: 300,
                nextArrow: $('.next'),
                prevArrow: $('.prev')
            });
        });
    </script>
</body>

</html>