<?php

get_header();

?>

<section id="design-intro">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <a class="active" href="#">Коммерческий</a>
            </div>
            <div class="col-auto">
                <a href="<?php echo get_site_url(null, 'private-design', 'relative'); ?>">Частный</a>
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
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=8">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/public_design/burgas.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>Burgas</h3>
                        </span>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a class="grid-link" href="<?php echo get_site_url(null, 'project-card', 'relative'); ?>?id=9">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/public_design/anticofe.jpg" alt="" />
                    <div class="details">
                        <span class="title">
                            <h3>Антикафе</h3>
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
