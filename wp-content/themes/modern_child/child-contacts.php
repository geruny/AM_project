<?php

get_header();

while (have_posts()) : the_post();
    do_action('tha_entry_before');
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section id="contacts">
            <div class="container">
                <div class="row wow fadeInUp contacts-entry">
                    <h2>Наши контакты</h2>
                </div>
                <div class="bg-contacts wow fadeInUp">
                    <div class="row g-0 gy-3">
                        <div class="col-12 col-md">
                            <div class="adres">
                                <h3>Адрес:</h3>
                                <a href="https://goo.gl/maps/xPbg7G7c4N4nJ6rv8" target="_blank"><i class="fas fa-map-marker-alt"></i>Гражданская ул., 13-15, Санкт-Петербург</a>
                            </div>
                        </div>
                        <div class="col-12 col-md border-left">
                            <h3>Телефоны:</h3>
                            <a class="phones" href="tel:+79817455467"><i class="fas fa-phone-alt"></i>+7(981)745-54-67</a>
                            <a class="phones" href="tel:+79818752531"><i class="fas fa-phone-alt"></i>+7(981)875-25-31</a>
                        </div>
                        <div class="col-12 col-md border-left">
                            <h3>Email:</h3>
                            <a href="mailto:asms-designspb@yandex.ru"><i class="fas fa-envelope"></i>asms-designspb@yandex.ru</a>
                        </div>
                        <div class="col-12 col-md border-left">
                            <h3>Социальные сети:</h3>
                            <div class="social">
                                <a href="https://www.behance.net/amdesignstudio2" target="_blank"><i class="fab fa-behance"></i></a>
                                <a href="https://www.instagram.com/design_am_studio/?hl=ru" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/ASSMDESIGN/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.2313212808774!2d30.31046581606245!3d59.92830368187245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963102f889cdc7%3A0xc5db47709b2b1513!2z0JPRgNCw0LbQtNCw0L3RgdC60LDRjyDRg9C7LiwgMTMtMTUsINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCAxOTAwMzE!5e0!3m2!1sru!2sru!4v1614794246252!5m2!1sru!2sru" width="" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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


    </article>

<?php
    do_action('tha_entry_after');
endwhile;

get_footer();
