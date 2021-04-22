<?php

get_header();

while (have_posts()) : the_post();
    do_action('tha_entry_before');
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section id="design">
            <div class="container">
                <div class="row design-entry">
                    <div class="col-md">
                        <h2>Архитектура</h2>
                        <p class="description">Выберите проект для просмотра</p>
                    </div>
                </div>
                <P style="height: 200px; font-size:48px; margin-left:100px;">Здесь пусто...</P>
            </div>
        </section>
    </article>

<?php
    do_action('tha_entry_after');
endwhile;

get_footer();
