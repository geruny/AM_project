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
            <?
            $grid_items = getData("wp_public_projects");
            foreach ($grid_items as $item) :
            ?>
                <div class="grid-item">
                    <a class="grid-link" href="<?= get_site_url(null, 'project-card', 'relative'); ?>?id=<?= $item->id_project ?>">
                        <img class="grid-img" src="<?= get_stylesheet_directory_uri(); ?>/assets/images/public_design/<?= $item->img ?>.jpg.webp" alt="<?= $item->img ?>" />
                        <div class="details">
                            <span class="title">
                                <h3><?= $item->title ?></h3>
                            </span>
                        </div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>

<script>
    new WOW().init();
</script>

<?php
get_footer();
