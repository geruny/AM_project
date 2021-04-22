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
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="concept-tab" data-bs-toggle="tab" data-bs-target="#concept" type="button" role="tab" aria-controls="concept" aria-selected="true">
                                    <i class="fa fa-star-o"></i>
                                    <h3>01. Concept</h3>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="prototype-tab" data-bs-toggle="tab" data-bs-target="#prototype" type="button" role="tab" aria-controls="prototype" aria-selected="false">
                                    <i class="fa fa-copy"></i>
                                    <h3>02. Prototyping</h3>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="design-tab" data-bs-toggle="tab" data-bs-target="#design" type="button" role="tab" aria-controls="design" aria-selected="false">
                                    <i class="fa fa-laptop"></i>
                                    <h3>03. Design</h3>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="development-tab" data-bs-toggle="tab" data-bs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="false">
                                    <i class="fa fa-code"></i>
                                    <h3>04. Development</h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="concept" role="tabpanel" aria-labelledby="concept-tab">
                                <div class="col-md-7 process-content">
                                    <h4>Professional website design</h4>
                                    <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prototype" role="tabpanel" aria-labelledby="prototype-tab">
                                <div class="row">
                                    <div class="col-md-5 process-img"> <img src="http://am.local3/wordpress/wp-content/uploads/2021/02/СпальняНОЧЬ_03.jpg"> </div>
                                    <div class="col-md-7 process-content">
                                        <h4>Sketch like a PRO</h4>
                                        <p>Apes and spidesgfsdgsgrsgrgsrhtr monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                                <div class="col-md-7 process-content">
                                    <h4>Make the design</h4>
                                    <p>Apes and spider monkeyssdhrsthsrherhstrhrthrthrthrt move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                                <div class="col-md-7 process-content">
                                    <h4>Code like a star</h4>
                                    <p>Apes and spider monkeys mofdgrgregeve theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
                                </div>
                            </div>
                        </div>
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
                                <a href="https://goo.gl/maps/xPbg7G7c4N4nJ6rv8" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i>Гражданская ул., 13-15, Санкт-Петербург</a>
                            </div>

                            <div class="row">
                                <h3>Телефоны:</h3>
                                <a id="fist-phone" href="tel:+79817455467"><i class="fa fa-phone" aria-hidden="true"></i>+7(981)745-54-67</a>
                                <a href="tel:+79818752531"><i class="fa fa-phone" aria-hidden="true"></i>+7(981)875-25-31</a>
                            </div>
                            <div class="row">
                                <h3>Email:</h3>
                                <a href="mailto:asms-designspb@yandex.ru"><i class="fa fa-envelope-o" aria-hidden="true"></i>asms-designspb@yandex.ru</a>
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
