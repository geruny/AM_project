<?php

get_header();

while (have_posts()) : the_post();
    do_action('tha_entry_before');
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section id="design">
            <div class="container">
                <div class="row design-entry">
                    <div class="col-md-9">
                        <h2>Частный дизайн</h2>
                        <p class="description">Выберите проект для просмотра</p>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="link-box justify-content-end">
                            <a class="active" href="#">Частный</a>
                            <div class="slash">
                                <a href="<?php echo get_site_url(null, 'public-design', 'relative'); ?>">Коммерческий</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="grid-item">
                        <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=1">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/1.jpg" alt="" />
                            <div class="details">
                                <span class="title">ЖК Галактика</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=2">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/2.jpg" alt="" />
                            <div class="details">
                                <span class="title">ЖК Русский дом</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a class="grid-link" href="">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/3.jpg" alt="" />
                            <div class="details">
                                <span class="title">ЖК Символ</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a class="grid-link" href="">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/4.jpg" alt="" />
                            <div class="details">
                                <span class="title">ЖК Твин Пикс</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a class="grid-link" href="">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/5.jpg" alt="" />
                            <div class="details">
                                <span class="title">ЖК Цивилизация</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item"> <a class="grid-link" href="">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/6.jpg" alt="" />
                            <div class="details">
                                <span class="title">Ломаная</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a class="grid-link" href="">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/7.jpg" alt="" />
                            <div class="details">
                                <span class="title">Фонтанка</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script>
            new WOW().init();
        </script>

    </article>

<?php
    do_action('tha_entry_after');
endwhile;

get_footer();
