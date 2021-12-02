<?php

/***************************************************
 * 
 * microsoft.robustittraining.com
 * @version v1.0.0
 * @author Jack Heeney
 * @page index.php
 * Copyright 2021 Robust IT Training
 * 
 ***************************************************/

?>
<?php define("SITE_ADDR", "http://bilmen.co.uk"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta name="robots" content="all,follow">

    <!-- ======= Meta tags ======== -->
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $meta['keywords']; ?>" />
    <meta name="description" content="<?php echo $meta['description']; ?>" />

    <!-- ======= Favicons ======== -->
    <link href="<?php echo SITE_ADDR ?>/assets/img/favicon_1.png" rel="icon">
    <link href="<?php echo SITE_ADDR ?>/assets/img/favicon_1.png" rel="apple-touch-icon">

    <!-- ======= Bootstrap CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- ======= Font Awesome CSS ======== -->
    <link async rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.typekit.net/qjk3gds.css">

    <!-- ======= Swiper JS ======== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- ======= AOS (animation) ======== -->
    <link href="<?php echo SITE_ADDR; ?>/assets/css/vendor/aos.css" rel="stylesheet">

    <!-- ======= Lottie ======== -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
    </script>

    <!-- ======= Main CSS ======== -->
    <link rel="stylesheet" href="<?php echo SITE_ADDR ?>/public/style.css">

</head>

<body>