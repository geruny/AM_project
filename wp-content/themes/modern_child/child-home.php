<?php

get_header();

while (have_posts()) : the_post();
    do_action('tha_entry_before');
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section id="slider-intro">
            <div class="container">
                <div class="row wow fadeInUp">
                    <?php
                    echo do_shortcode('[smartslider3 slider="2"]');
                    ?>
                </div>
            </div>
        </section>

        <section id="about-us-block">
            <div class="container">
                <div class="row">
                    <div class="text-center wow fadeInUp">
                        <h2>О нас</h2>
                        <a href="page.html">Наша команда</a>
                        <p>AМ | DESIGN STUDIO – мы создаем современные интерьеры частных и общественных пространств. Для нас важно создать стильный проект, грамотно разработать его , и самое главное реализовать. Внимание к каждой мелочи делает наши интерьеры смелыми и комфортными для жизни. Наша задача сделать Ваши мечты реальностью!</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="choose-design">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col">
                        <div class="title">
                            <h2>Портфолио</h2>
                            <p>Посмотрите наши портфолио с дизайн-проектами</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col">
                        <div id="interior-app" class="interior-block-container">
                            <a href="<?php echo get_site_url(null, 'private-design', 'relative'); ?>">
                                <interior-card data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/2.jpg">
                                    <h3 slot="interior-header">Частные интерьеры</h3>
                                    <p slot="interior-content">Посмотрите портфолио с дизайном жилых интерьеров.</p>
                                </interior-card>
                            </a>
                            <a href="<?php echo get_site_url(null, 'public-design', 'relative'); ?>">
                                <interior-card data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/3.jpg">
                                    <h3 slot="interior-header">Коммерческие интерьеры</h3>
                                    <p slot="interior-content">Посмотрите портфолио с коммерческими интерьерами.</p>
                                </interior-card>
                            </a>
                            <a href="<?php echo get_site_url(null, 'architecture', 'relative'); ?>">
                                <interior-card data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/4.jpg">
                                    <h3 slot="interior-header">Архитектура</h3>
                                    <p slot="interior-content">Посмотрите портфолио с архитектурными решениями.</p>
                                </interior-card>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="process-block" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/1.jpg);">
            <div id="process-block-bg"> -->
        <section id="process-block">
            <div class="container">
                <div class="title-border">
                </div>

                <div class="row wow fadeInUp">
                    <div class="col">
                        <div class="title">
                            <h2>Этапы работ</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <div id="cd-timeline" class="cd-container">
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-bg">
                                <i class="fas fa-pencil-ruler"></i>
                            </div> <!-- cd-timeline-img -->
                            <div class="cd-timeline-content">
                                <h3>Этап 1</h3>
                                <ol>
                                    <li>
                                        <p>Замер помещения и составление технического задания</p>
                                    </li>
                                    <li>
                                        <p>Создание плана планировки и ключевых идей по каждому помещению</p>
                                    </li>
                                </ol>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-movie">
                                <i class="fas fa-paint-brush"></i>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h3>Этап 2</h3>
                                <ol>
                                    <li>
                                        <p>Разработка стилевых эскизов</p>
                                    </li>
                                </ol>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <i class="fas fa-cube"></i>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h3>Этап 3</h3>
                                <ol>
                                    <li>
                                        <p>Разработка 3D-визуализации на основе концепт-бордов и согласованной планировки</p>
                                    </li>
                                </ol>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-location">
                                <i class="fas fa-list-ul"></i>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h3>Этап 4</h3>
                                <ol>
                                    <li>
                                        <p>Создание пакета строительных чертежей</p>
                                    </li>
                                </ol>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-location">
                                <i class="fas fa-archive"></i>
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h3>Этап 5</h3>
                                <ol>
                                    <li>
                                        <p>Авторский надзор</p>
                                    </li>
                                    <li>
                                        <p>Комплектация проекта</p>
                                    </li>
                                </ol>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->
                    </div> <!-- cd-timeline -->
                </div>
            </div>
        </section>
        <section id="contacts" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/1.jpg);">
            <div id="contacts-bg">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="title wow fadeInUp">
                                <h2>Наши контакты</h2>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-info wow fadeInUp">
                        <div class="row g-0 gy-3">
                            <div class="col-12 col-md adres-wrapper">
                                <div class="adres">
                                    <h3>Адрес:</h3>
                                    <a href="https://goo.gl/maps/xPbg7G7c4N4nJ6rv8" target="_blank"><i class="fas fa-map-marker-alt"></i>Гражданская ул., 13-15, Санкт-Петербург</a>
                                </div>
                            </div>
                            <div class="col-12 col-md border-left">
                                <h3>Телефоны:</h3>
                                <a class="phones" href="tel:+79817455467"><i class="fas fa-phone-alt"></i>+7(981)745-54-67</a>
                                <a class="phones" href="tel:+79818752531"><i class="fas fa-phone-alt"></i>+7(981)875-25-31</a>
                            </div>
                            <div class="col-12 col-md border-left">
                                <h3>Email:</h3>
                                <a href="mailto:asms-designspb@yandex.ru"><i class="fas fa-envelope"></i>asms-designspb@yandex.ru</a>
                            </div>
                            <div class="col-12 col-md border-left social">
                                <h3>Социальные сети:</h3>
                                <div class="social">
                                    <a href="https://www.behance.net/amdesignstudio2" target="_blank"><i class="fab fa-behance"></i></a>
                                    <a href="https://www.instagram.com/design_am_studio/?hl=ru" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/ASSMDESIGN/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row wow fadeInUp map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.2313212808774!2d30.31046581606245!3d59.92830368187245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963102f889cdc7%3A0xc5db47709b2b1513!2z0JPRgNCw0LbQtNCw0L3RgdC60LDRjyDRg9C7LiwgMTMtMTUsINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCAxOTAwMzE!5e0!3m2!1sru!2sru!4v1614794246252!5m2!1sru!2sru" width="" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <script>
            new WOW().init();
        </script>

        <?php do_action('tha_entry_bottom'); ?>
    </article>

<?php
    do_action('tha_entry_after');
endwhile;

get_footer();
