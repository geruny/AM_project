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
                        <h2>Коммерческий дизайн</h2>
                        <p class="description">Выберите проект для просмотра</p>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="link-box justify-content-end">
                            <a href="<?php echo get_site_url(null, 'private-design', 'relative'); ?>">Частный</a>
                            <div class="slash">
                                <a class="active" href="#">Коммерческий</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="grid-item">
                        <a class="grid-link" href="">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/public_design/1.jpg" alt="" />
                            <div class="details">
                                <span class="title">Burgas</span>
                                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item">
                        <a class="grid-link" href="">
                            <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/public_design/2.jpg" alt="" />
                            <div class="details">
                                <span class="title">Антикафе</span>
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
