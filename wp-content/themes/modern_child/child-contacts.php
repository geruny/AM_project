<?php

get_header();
?>

<section id="contacts">
    <? get_template_part('template-parts/frontend/contacts'); ?>
</section>

<section id="contact-us">
    <? get_template_part('template-parts/frontend/contact-us'); ?>
</section>

<script>
    new WOW().init();
</script>

<?php
get_footer();
