<?php

get_header();

while (have_posts()) : the_post();
    do_action('tha_entry_before');
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <script>
            new WOW().init();
        </script>


    </article>

<?php
    do_action('tha_entry_after');
endwhile;

get_footer();
