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
                    <h2>Дизайн</h2>
                </div>
                <div class="row wow fadeInUp">
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
        </section>

        <section id="process-block" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/1.jpg);">
            <div id="process-block-bg">
                <div class="container">
                    <div class="row wow fadeInUp">
                        <h2>Этапы работ</h2>
                    </div>
                    <div class="row wow fadeInUp">
                        <div id="cd-timeline" class="cd-container">
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture">
                                    <i class="fas fa-pencil-ruler"></i>
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h2>Title of section 1</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <a href="#0" class="cd-read-more">Read more</a>
                                    <span class="cd-date">Jan 14</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-movie">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-movie.svg" alt="Movie">
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h2>Title of section 2</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                    <a href="#0" class="cd-read-more">Read more</a>
                                    <span class="cd-date">Jan 18</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-picture">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-picture.svg" alt="Picture">
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h2>Title of section 3</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                                    <a href="#0" class="cd-read-more">Read more</a>
                                    <span class="cd-date">Jan 24</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-location">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location.svg" alt="Location">
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h2>Title of section 4</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <a href="#0" class="cd-read-more">Read more</a>
                                    <span class="cd-date">Feb 14</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-location">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location.svg" alt="Location">
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h2>Title of section 5</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                                    <a href="#0" class="cd-read-more">Read more</a>
                                    <span class="cd-date">Feb 18</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->

                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img cd-movie">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-movie.svg" alt="Movie">
                                </div> <!-- cd-timeline-img -->

                                <div class="cd-timeline-content">
                                    <h2>Final Section</h2>
                                    <p>This is the content of the last section</p>
                                    <span class="cd-date">Feb 26</span>
                                </div> <!-- cd-timeline-content -->
                            </div> <!-- cd-timeline-block -->
                        </div> <!-- cd-timeline -->
                        </body>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacts-block" class="contact">
            <div class="container">
                <dirv class="row wow fadeInUp">
                    <div class="col-md-4">
                        <div class="info-box">
                            <h2>Свяжитесь с нами</h2>
                            <div class="row">
                                <h3>Адрес:</h3>
                                <a href="https://goo.gl/maps/xPbg7G7c4N4nJ6rv8" target="_blank"><i class="fas fa-map-marker-alt"></i>Гражданская ул., 13-15, Санкт-Петербург</a>
                            </div>

                            <div class="row">
                                <h3>Телефоны:</h3>
                                <a id="fist-phone" href="tel:+79817455467"><i class="fas fa-phone-alt"></i>+7(981)745-54-67</a>
                                <a href="tel:+79818752531"><i class="fas fa-phone-alt"></i>+7(981)875-25-31</a>
                            </div>
                            <div class="row">
                                <h3>Email:</h3>
                                <a href="mailto:asms-designspb@yandex.ru"><i class="fas fa-envelope"></i>asms-designspb@yandex.ru</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.2313212808774!2d30.31046581606245!3d59.92830368187245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963102f889cdc7%3A0xc5db47709b2b1513!2z0JPRgNCw0LbQtNCw0L3RgdC60LDRjyDRg9C7LiwgMTMtMTUsINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCAxOTAwMzE!5e0!3m2!1sru!2sru!4v1614794246252!5m2!1sru!2sru" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </dirv>
                <div class="row wow fadeInUp">
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
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
