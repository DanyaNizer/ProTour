<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProTur
 */

?>

<!--подвал -->
<footer class="footer-main">
    <div class="wrap">

        <div class="col-four tab-full mob-full footer-info">

            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/Img/logo.png" alt="">

            </div>

            <p>
                Tri-ti-tur<br> 2021г.<br> Телефон: &nbsp; +123-456-789
            </p>

        </div>
        <!-- /footer-info -->

        <div class="col-two tab-1-3 mob-1-2 site-links">

            <h4>Навигация по сайту</h4>

            <ul>
                <li><a href="#">ГЛАВНАЯ</a></li>
                <li><a href="#">ГОРЯЧИЕ ЦЕНЫ</a></li>
                <li><a href="#">О НАС</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
            </ul>

        </div>
        <!-- /site-links -->

        <div class="col-two tab-1-3 mob-1-2 social-links">

            <h4>Соц. сети</h4>

            <ul>
                <li><a href="#">FACEBOOK</a></li>
                <li><a href="#">GMAIL</a></li>
            </ul>

        </div>
        <!-- /social -->
    </div>

</footer>
<!--Script -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/Script.js'></script>

<script>
    var tag_css = document.createElement('link');
    tag_css.rel = 'stylesheet';
    tag_css.href = '<?php echo get_template_directory_uri(); ?>/Css/Style.css'; // здесь указывается URL стилевого файла
    tag_css.type = 'text/css';
    var tag_head = document.getElementsByTagName('head');
    tag_head[0].appendChild(tag_css);
</script>
</div><?php wp_footer(); ?>

</body>

</html>