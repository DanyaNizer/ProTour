<?php
/*
    Template Name: Kontakt
    */


get_header();
?>
<style>
    .background-contact {
        background: url("<?php echo get_template_directory_uri(); ?>/img/fon.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<!--* Тело сайта -->
<div class="background-contact">

    <main class="main">
        <div class="wrap">
            <div class="contact">
                <div class="contact-text">
                    <p class="contact-face">Контактное лицо - Леся</p>
                    <div class="contact-phone">
                        <p>Тел. </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Kyivstar_logo.png" alt="">
                        <a href="tel:0982792773 ">+38 (098) 27 92 773</a>
                    </div>
                    <div class="contact-social">
                        <a href="#" class="contact-instagram">Instagram - zzzzzzzzzzzzzzzzzzz</a>
                        <a href="#" class="contact-tiktok">TikTok - zzzzzzzzzzzzzzzzzzzzzzzzz</a>
                    </div>
                </div>
                <div class="contact-qr qr">
                    <div class="qr-info">
                        <p>Отсканируйте qr код для того чтобы попасть в сообщество Viber</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/qr-viber.png" alt="">
                </div>
            </div>

        </div>
        <div class="contact-map">
            <div class="camel-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/camel.png" alt="">
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.881596588996!2d30.62097806933823!3d50.4433060701321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c55ba3100001%3A0x2c346b732a6346f5!2z0L_RgNC-0YHQvy4g0JzQuNGA0LAsIDQsINC-0YQuIDMxMiwg0JrQuNC10LIsIDAyMTA1!5e0!3m2!1sru!2sua!4v1613150737037!5m2!1sru!2sua" width="100%" height="600" frameborder="0" style="border:15px;" allowfullscreen=""></iframe>
        </div>
</div>
</main>


<?php

get_footer();
