<?php
/*
    Template Name: About
    */


get_header();
?>
<style>
    .background-aboutus {
        background-image: url("<?php echo get_template_directory_uri(); ?>/img/pexels-photo-408503.jpeg");
    }
</style>
<!--* Тело сайта -->
<main class="main">
    <div class="background-aboutus">
        <div class="wrap">
            <div class="about">
                <div class="about__reviews reviews">
                    <div class="reviews__position">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/totem.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>



<?php

get_footer();
