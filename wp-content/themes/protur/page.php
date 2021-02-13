<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProTur
 */

get_header();
?>
<!--* Тело сайта -->
<main class="main">
    <div class="backgound-minprice">
        <div class="wrap">
            <div class="minprice">
                <div class="minprice__main-text">
                    <h2>Заголовк</h2>
                    <h3>Очень интересный и продающий текст</h3>
                </div>
                <div id="itTourPriceWidgetWrapper"></div>
                <script id="itTourPriceWidgetScript" enableBuy="false" viewType="undefined" priceButton="undefined" widgetZIndex="10" activeTab="tour" lang="ru" currency_uah="1" showcase_number="1" charset="utf-8" theme="https://ittour.com.ua/classes/handlers/ittour_external_modules/ittour_modules/min_price_v2/min_price/css/gray.css" src="https://ittour.com.ua/classes/handlers/ittour_external_modules/ittour_modules/min_price_v2/min_price/js/widget.js?token=3D71275913467G5122878N91" module_paysystem="liqpay" paysystem_client_pay="0" paysystem_commission=""></script>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();
