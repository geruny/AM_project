<?php

get_header();

?>

<section id="design-intro">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <a href="<?php echo get_site_url(null, 'public-design', 'relative'); ?>">Коммерческие</a>
            </div>
            <div class="col-auto">
                <a class="active" href="#">Частные</a>
            </div>
            <div class="col-auto">
                <a href="<?php echo get_site_url(null, 'architecture', 'relative'); ?>">Архитектура</a>
            </div>
        </div>
    </div>
</section>
<section id="projects">
    <div class="container">
        <div class="grid">
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=1">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/galactica.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>ЖК Галактика</h3>
                        </span>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=2">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/rus_home.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>ЖК Русский дом</h3>
                        </span>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=3">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/simvol.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>ЖК Символ</h3>
                        </span>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=4">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/twin_pix.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>ЖК Твин Пикс</h3>
                        </span>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=7">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/lomanaya.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>Ломаная</h3>
                        </span>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=5">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/civilization.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>ЖК Цивилизация</h3>
                        </span>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=6">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/private_design/fontanka.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>Фонтанка</h3>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    new WOW().init();
</script>

<?php

get_footer();
