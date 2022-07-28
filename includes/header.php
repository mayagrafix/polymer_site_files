<?php
define('APPLICATION', true);

require_once dirname(dirname(__FILE__)) . "/includes/functions.php";
// Turn off all error reporting
error_reporting(0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo getTitle(); ?></title>

    <!-- Bootstrap Core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Stellar Nav CSS -->
    <link rel="stylesheet" href="css/stellarnav.min.css">

    <!-- Lightboxed CSS -->
    <link rel="stylesheet" href="css/lightboxed.css">

    <!-- Custom Styles CSS -->
    <link rel="stylesheet" href="css/psrt_styles.css">

    <!-- Add Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
          rel="stylesheet">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/logo-favicon.png"/>
    <link rel="apple-touch-icon" href="images/logo-favicon.png"/>

</head>
<body>



<div class="bg-white sticky-lg-top">
    <!-- Logos -->
    <div class="container pt-5 pt-lg-0">
        <div class="row gy-3 logo-container justify-content-center pt-3 pb-5">
            <div class="col-7 col-md-4 col-lg-5 px-0">
                <a href="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                    echo "#";
                } else {
                    echo "index.php";
                } ?>"><img class="img-fluid d-none d-lg-block" src="images/psrt-logo.svg" alt="PSRT Logo">
                    <img class="img-fluid d-sm-block d-lg-none" src="images/psrt-logo-mobile.svg"
                         alt="PSRT Logo Mobile"></a>
            </div>
            <div class="col-8 col-md-4 px-0">
                <a class="cusat-logo-link" href="https://cusat.ac.in/" target="_blank"><img
                            class="img-fluid d-none d-lg-block" src="images/cusat-logo.svg" alt="CUSAT Logo">
                    <img class="img-fluid d-sm-block d-lg-none" src="images/cusat-logo-mobile.svg" alt="CUSAT Logo Mobile"></a>
            </div>
        </div>
    </div>
    <!-- End Logos -->

    <!-- Stellar Nav -->
    <?php echo writeMainStellarNav(); ?>
    <!-- End Stellar Nav  -->
</div>


<!-- Main Content -->
<div class="container mt-5 px-4 px-md-0">


