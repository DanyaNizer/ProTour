<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProTur
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tab -->
    <title>Tri-Ti-Tur отпуск для всей семьи</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/Img/favicon.png" type="image/x-icon">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Css/preloader.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- загрузочный экран -->
    <div id="preloader">
        <svg viewBox="0 0 800 600">
            <symbol id="s-text">
                <text text-anchor="middle" x="50%" y="35%" class="text--line">
                    Tri-Ti-Tour
                </text>

            </symbol>
            <g class="g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
            </g>
        </svg>
        <div id="loader"></div>
    </div>
    <!-- Контент -->
    <div class="wrapper">


        <!--* Шапка -->
        <header class="header">
            <div class="header__top-info-bg">
                <div class="wrap">
                    <div class="header__top-info">

                        <div class="header__logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/Img/logo.png" alt="Логотип NoVo TuR"></a>
                        </div>

                        <nav class="header__top-nav myheader">
                            <div class="menu__blok">
                                <div class="menu">
                                    <span class="menu-global menu-top"></span>
                                    <span class="menu-global menu-middle"></span>
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </div>
                            <div class="wrap">
                                <ul>
                                    <li><a class="top-li" href="http://protur.local/">Главная</a></li>
                                    <li><a class="top-li" href="http://protur.local/minimum-prices/">Горячие туры</a></li>
                                    <li><a class="top-li" href="http://protur.local/about-us/">О нас</a></li>
                                    <li><a class="top-li" href="http://protur.local/contact/">Контакты</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="header__fon">
                            <ul>
                                <li>+380-50-996-3333</li>
                                <li>+380-50-996-3333</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>