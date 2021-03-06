<?php
/**
 * @var string $title
 * @var bool $personal
 */
//$personal = strpos($_SERVER['REQUEST_URI'], 'personal');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MBA | <?=$title ?></title>
    <link rel="shortcut icon" href="img/404.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="sass/style.css?v=15">
</head>
<body>

<header class="header">
    <div class="header-left">
        <div class="header-logo">
            <a href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>
        </div>
    </div>
    <div class="header-title">
        <div class="header-title__top">БИЗНЕС АКАДЕМИЯ МБА СИТИ</div>
        <div class="header-title__bottom">ПОЛУЧИТЬ НОВУЮ СПЕЦИАЛЬНОСТЬ ИЛИ ПОВЫСИТЬ КВАЛИФИКАЦИЮ</div>
    </div>
    <div class="header-hat">
        <a href="login.php" title="Личный кабинет">
            <i class="fa fa-graduation-cap"></i>
        </a>
    </div>
</header>

