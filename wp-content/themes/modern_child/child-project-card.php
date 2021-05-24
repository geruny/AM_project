<?php

get_header();

$project = getDataProject();

?>

<section id="project">
    <div class="container">
        <div class="row wow fadeInUp project-title">
            <?= $project->entry_title ?>
        </div>
        <div class="row g-0 wow fadeInUp">
            <div class="col-12 col-lg-10 slider">
                <? echo do_shortcode($project->shortcode_slider); ?>
            </div>
            <div class="col col-lg-2 project-info">
                <?= $project->project_info ?>
            </div>
        </div>
        <div class="row wow g-0 fadeInUp project-description">
            <div class="col-12 col-lg-8">
                <p class="text-description">
                    <?= $project->project_description ?>
                </p>
            </div>
            <div class="col col-lg-3 g-0">
                <div class="project-authors">
                    <?= $project->project_authors ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-us">
    <div class="container">
        <div class="contact-us-tittle">
            <div class="row wow fadeInUp">
                <h2>Обратный звонок</h2>
                <p>Оставте свой телефон и мы вам перезвоним</p>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <?php
            echo do_shortcode('[contact-form-7 id="694" title="Контактная форма"]');
            ?>
        </div>
    </div>
</section>

<script>
    new WOW().init();
</script>

<?php

get_footer();
