<?php

get_header();
?>

<section id="slider-intro">
    <div class="container">
        <div class="row wow fadeInUp">
            <?= do_shortcode('[smartslider3 slider="2"]'); ?>
        </div>
    </div>
</section>

<section id="about-us-block">
    <div class="container">
        <div class="row">
            <div class="text-center wow fadeInUp">
                <h2>О нас</h2>
                <a href="<?= get_site_url(null, 'prices', 'relative'); ?>#team">Наша команда</a>
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
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <div class="col">
                <div id="interior-app" class="interior-block-container">
                    <a href="<?= get_site_url(null, 'private-design', 'relative'); ?>">
                        <interior-card data-image="<?= get_stylesheet_directory_uri(); ?>/assets/images/home/2.jpg">
                            <h3 slot="interior-header">Частные интерьеры</h3>
                            <p slot="interior-content">Посмотрите портфолио с дизайном жилых интерьеров.</p>
                        </interior-card>
                    </a>
                    <a href="<?= get_site_url(null, 'public-design', 'relative'); ?>">
                        <interior-card data-image="<?= get_stylesheet_directory_uri(); ?>/assets/images/home/3.jpg">
                            <h3 slot="interior-header">Коммерческие интерьеры</h3>
                            <p slot="interior-content">Посмотрите портфолио с коммерческими интерьерами.</p>
                        </interior-card>
                    </a>
                    <a href="<?= get_site_url(null, 'architecture', 'relative'); ?>">
                        <interior-card data-image="<?= get_stylesheet_directory_uri(); ?>/assets/images/home/4.jpg">
                            <h3 slot="interior-header">Архитектура</h3>
                            <p slot="interior-content">Посмотрите портфолио с архитектурными решениями.</p>
                        </interior-card>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="process-block">
    <div class="container">
        <div class="title-border"></div>
        <div class="row wow fadeInUp">
            <div class="col">
                <div class="title">
                    <h2>Этапы работ</h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <div id="cd-timeline" class="cd-container">
                <?
                $timeline_blocks = getData("wp_home_timeline");
                foreach ($timeline_blocks as $block) :
                ?>
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-bg">
                            <i class="<?= $block->icon ?>"></i>
                        </div>
                        <div class="cd-timeline-content">
                            <h3><?= $block->title ?></h3>
                            <ol>
                                <?= $block->li ?>
                            </ol>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="contacts" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/1.jpg);">
    <div id="contacts-bg">
        <? get_template_part('template-parts/frontend/contacts'); ?>
    </div>
</section>

<script>
    new WOW().init();
</script>

<?php
get_footer();
