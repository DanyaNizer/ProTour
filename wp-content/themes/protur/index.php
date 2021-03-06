<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProTur
 */

get_header();
?>

<!--* Тело сайта -->
<main class="main">
    <!-- дальше слик слайдер -->
    <div class="slick">
        <div class="slick__slider">
            <div class="slick__block sblock">
                <img class="min-he" data-lazy="<?php echo get_template_directory_uri(); ?>/Img/more_vecher_otdyh_84639_1920x1200.jpg" alt="">
                <h3>Заголовок</h3>
                <h4>Под заголовок</h4>
                <div class="sblock-btndown">
                    <a href="#down">
                        <p>Все туры</p>
                        <br>
                        <p><img src="<?php echo get_template_directory_uri(); ?>Img/arrow.png" alt=""></p>
                    </a>
                </div>
            </div>
            <div class="slick__block sblock">
                <img class="min-he" data-lazy="<?php echo get_template_directory_uri(); ?>/Img/plot_reka_otdyh_125752_1920x1200.jpg" alt="">
                <h3>Заголовок</h3>
                <h4>Под заголовок</h4>
                <div class="sblock-btndown">
                    <a href="#down">
                        <p>Все туры</p>
                        <br>
                        <p><img src="<?php echo get_template_directory_uri(); ?>Img/arrow.png" alt=""></p>
                    </a>
                </div>
            </div>
            <div class="slick__block sblock">
                <img class="min-he" data-lazy="<?php echo get_template_directory_uri(); ?>/Img/tropiki_kurort_otdyh_90877_1920x1200.jpg" alt="">
                <h3>Заголовок</h3>
                <h4>Под заголовок</h4>
                <div class="sblock-btndown">
                    <a href="#down">
                        <p>Все туры</p>
                        <br>
                        <p><img src="<?php echo get_template_directory_uri(); ?>Img/arrow.png" alt=""></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="background-wpap">
        <div class="wrap">
            <div class="soc">
                <div class="soc__text">
                    <p>Мы в соц. сетях</p>
                </div>
                <div class="soc__img">
                    <div class="soc__img-blok">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/Img/icons8-instagram-50.png" alt="instagram"></a>
                    </div>
                    <div class="soc__img-blok">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/Img/icons8-tiktok-50.png" alt="tiktok"></a>
                    </div>
                    <div class="soc__img-blok">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/Img/icons8-viber-50.png" alt="viber"></a>
                    </div>
                </div>
            </div>


            <div class="down" id="down"></div>

            <!-- модуль витрины  -->
            <div id="showcase_hottour_v2_showcase_module"></div>
            <script src="https://www.ittour.com.ua/showcase_search.jsx?id=43239D313078G2541O4359248&type=103&num=1"></script>


            <div class="rewies">
                <h2>Отзывы наших клиентов</h2>
                <div class="rewies__slider slider">

                    <div class="slider__block text-center">
                        <p>Здравствуйте, спасибо Вам огромное за тур! Все прошло лучше чем ожидала! Вы супер El Faraana 4</p>
                    </div>

                    <div class="slider__block text-center ">
                        <p>Доброе утро! Спасибо большое, нам все нравиться Queen Sharm 4</p>
                    </div>

                    <div class="slider__block text-center">
                        <p>Добрый день форумчане неделю назад вернулся с семьей из Шарма, хотел поблагодарить и отметить работу Леси, хорошее настроение от поездки началось ещё при резервировании тура и оформления документов, вежливость, компетентность
                            в вопросах, понимание желания клиента, терпение к его прихотям, оперативность, коммуникабельность, всё это создало уверенность в хорошем отдыхе и так оно и было отель Клеопатра супер!!! Турфирма Best Way СУПЕР!!! ВСЕМ
                            РЕКОМЕНДУЮ!!! Cleopatra Luxury 5</p>
                    </div>

                    <div class="slider__block text-center">
                        <p>Здравствуйте, Леся Отдохнули отлично. ДОМИНИКАНА ЭТО РАЙ Побывали на двух экскурсиях (Остров «Саона» и полуостров «Самана»). На полуостров Остров «Саона» просто рай. Пляж офигительный, бирюзовая вода, умеренные волны, белый
                            песок. Рассвет встречали каждое утро без пропусков и он каждое утро был разным и индивидуальным. Природа нас просто покорила!!!! Мы даже стали сравнивать природу Доминикан с Мальдивами. Они могут конкурировать. В общем,
                            за оплаченные деньги мы отдохнули превосходно. Спасибо Вам большое!!!</p>
                    </div>

                    <div class="slider__block text-center">
                        <p>Леся здравствуйте)Спасибо Вам огромное за Мераки отель! Очень здорово!!!Хоть и холодновато было но загорели как негры День Рождения удался!!!Спасибо огромное
                        </p>
                    </div>

                    <div class="slider__block text-center">
                        <p>Леся, дякуємо вам за тур, все отлічно, анекс молодці, все на рівні, номер чудовий, людей мало, їжа гут, вітру не має, тільки комарі ввечері, фумігатор наше все!</p>
                    </div>

                    <div class="slider__block text-center">
                        <p>Если спросите нас вернемся ли мы сюда, отвечу. ДА, вернемся не смотря на все "-" отеля, как оказалось они не значительны (как для Африки) по сравнению с тем что мы видели сегодня.
                        </p>
                    </div>

                    <div class="slider__block text-center">
                        <p>Лесічка, дякуємо Вам величезне! трішки важкувато було з нічним перельотом. Але вже були на пляжі. Отель дуже сподобався, а море просто скло. А саме головне що мало людей. Поки що усім дуже задоволені. Ще раз дуже, дуже
                            Вам вдячні!
                        </p>
                    </div>
                </div>
            </div>

        </div>

</main>

<?php

get_footer();
