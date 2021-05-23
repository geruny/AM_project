<?php

get_header();

// while (have_posts()) : the_post();
//     do_action('tha_entry_before');
?>

<section id="prices">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col">
                <h2>Выберите тариф для себя</h2>
            </div>
        </div>

        <div class="row flex-items-sm-middle flex-items-sm-center min-height wow fadeInUp">

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card text-sm-center">
                    <div class="card-header">
                        <h3 class="display-2"><span class="currency">₽</span>2 500<span class="period">/м<sup>2</sup></span></h3>
                    </div>
                    <div class="card-block text-center">
                        <h4 class="card-title">
                            Стандартный пакет
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p>Планировочное решение</p>
                            </li>
                            <li class="list-group-item">
                                <p>3D-визуализация</p>
                            </li>
                            <li class="list-group-item">
                                <p>Строительные чертежи</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card text-sm-center">
                    <div class="card-header">
                        <h3 class="display-2"><span class="currency">₽</span>3 200<span class="period">/м<sup>2</sup></span></h3>
                    </div>
                    <div class="card-block text-center">
                        <h4 class="card-title">
                            Полный пакет
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p>Планировочное решение</p>
                            </li>
                            <li class="list-group-item">
                                <p>3D-визуализация</p>
                            </li>
                            <li class="list-group-item">
                                <p>Строительные чертежи</p>
                            </li>
                            <li class="list-group-item">
                                <p>Чертежи мебели</p>
                            </li>
                            <li class="list-group-item">
                                <p>Ведомость мебели и
                                    материалов
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card text-sm-center">
                    <div class="card-header">
                        <h3 class="display-2"><span class="currency">₽</span>4 500<span class="period">/м<sup>2</sup></span></h3>
                    </div>
                    <div class="card-block text-center">
                        <h4 class="card-title">
                            Премиум пакет
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p>Планировочное решение</p>
                            </li>
                            <li class="list-group-item">
                                <p>3D-визуализация</p>
                            </li>
                            <li class="list-group-item">
                                <p>Строительные чертежи</p>
                            </li>
                            <li class="list-group-item">
                                <p>Спецификация мебели и
                                    материалов
                                </p>
                            </li>
                            <li class="list-group-item">
                                <p>Авторский надзор (2 месяца)</p>
                            </li>
                            <li class="list-group-item">
                                <p>Комплектация проекта</p>
                            </li>
                            <li class="list-group-item">
                                <p>Декорирование проекта</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card text-sm-center">
                    <div class="card-header">
                        <h3 class="display-2"><span class="currency">₽</span>30 000<span class="period">/м<sup>2</sup></span></h3>
                    </div>
                    <div class="card-block text-center">
                        <h4 class="card-title">
                            Авторский надзор
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p>4 выезда на объект в месяц</p>
                            </li>
                            <li class="list-group-item">
                                <p>Корректировка чертежей</p>
                            </li>
                            <li class="list-group-item">
                                <p>Контроль этапности стройки</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card text-sm-center">
                    <div class="card-header">
                        <h3 class="display-2"><span class="currency">₽</span>20 000<span class="period">/м<sup>2</sup></span></h3>
                    </div>
                    <div class="card-block text-center">
                        <h4 class="card-title">
                            Комплектация
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p>Работа с поставщиками</p>
                            </li>
                            <li class="list-group-item">
                                <p>Организация закупок</p>
                            </li>
                            <li class="list-group-item">
                                <p>Работа с рекламациями</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col">
                <h2>Наша команда</h2>
            </div>
        </div>
        <div class="grid wow fadeInUp">
            <div class="grid-item">
                <div class="grid-link">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prices/Anna_Stukalova.jpg" alt="Anna Stukalova" />
                    <div class="details">
                        <span class="title">
                            <h3>Стукалова Анна</h3>
                        </span>
                        <span class="info">
                            <p>Ведущий дизайнер</br>
                                co-founder of AM | DESIGN STUDIO
                            </p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-link">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prices/Marina_Sorsomatyan.jpg" alt="Marina Sorsomatyan" />
                    <div class="details">
                        <span class="title">
                            <h3>Сорсоматьян Мария</h3>
                        </span>
                        <span class="info">
                            <p>Ведущий дизайнер</br>
                                co-founder of AM | DESIGN STUDIO
                            </p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-link">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prices/Kate_Voytovich.jpg" alt="Kate Voytovich" />
                    <div class="details">
                        <span class="title">
                            <h3>Войтович Екатерина</h3>
                        </span>
                        <span class="info">
                            <p>Комплектатор</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-link">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prices/Anna_Kayasheva.jpg" alt="Anna Kayasheva" />
                    <div class="details">
                        <span class="title">
                            <h3>Каяшева Анна</h3>
                        </span>
                        <span class="info">
                            <p>Проектировщик</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-link">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prices/Nikolay_Limansky.jpg" alt="Nikolay Limansky" />
                    <div class="details">
                        <span class="title">
                            <h3>Лиманский Николай</h3>
                        </span>
                        <span class="info">
                            <p>Визуализатор</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-link">
                    <img class="grid-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/prices/Nikita_Nikitin.jpg" alt="Nikita Nikitin" />
                    <div class="details">
                        <span class="title">
                            <h3>Никитин Никита</h3>
                        </span>
                        <span class="info">
                            <p>Ведущий инженер</p>
                        </span>
                    </div>
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
//     do_action('tha_entry_after');
// endwhile;

get_footer();