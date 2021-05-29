<?php

add_filter('template_include', function ($path) {

    if (is_page('home')) {
        return get_stylesheet_directory() . '/child-home.php';
    } elseif (is_page('private-design')) {
        return get_stylesheet_directory() . '/child-private-design.php';
    } elseif (is_page('public-design')) {
        return get_stylesheet_directory() . '/child-public-design.php';
    } elseif (is_page('architecture')) {
        return get_stylesheet_directory() . '/child-architecture.php';
    } elseif (is_page('contacts')) {
        return get_stylesheet_directory() . '/child-contacts.php';
    } elseif (is_page('project-card')) {
        return get_stylesheet_directory() . '/child-project-card.php';
    } elseif (is_page('prices'))
        return get_stylesheet_directory() . '/child-prices.php';

    return $path;
});

add_action('wp_enqueue_scripts', 'modern_child_theme_scripts');
function modern_child_theme_scripts()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() .
        '/libs/css/bootstrap.min.css', array(), '5.0.0', 'all');

    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .
        '/libs/js/bootstrap.min.js', array('jquery'), '5.0.0', true);

    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() .
        '/libs/css/font-awesome.min.css', array(), '5.15.3', 'all');

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    if (is_page('home')) {
        wp_enqueue_style('home', get_stylesheet_directory_uri() .
            '/assets/css/home.css', array(), null, 'all');

        wp_enqueue_script('home', get_stylesheet_directory_uri() .
            '/assets/js/home.js', array(), null, true);

        // vue.js for desing section
        wp_enqueue_script('vue', get_stylesheet_directory_uri() .
            '/libs/js/vue.min.js', array(), '2.6.12', false);
    }

    if (is_page(array('private-design', 'public-design', 'architecture'))) {
        wp_enqueue_style('design', get_stylesheet_directory_uri() .
            '/assets/css/design.css', array(), null, 'all');

        wp_enqueue_script('design', get_stylesheet_directory_uri() .
            '/assets/js/design.js', array(), null, true);

        // masonry & imagesloaded for gallery
        wp_enqueue_script('imagesloaded', get_stylesheet_directory_uri() .
            '/libs/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);

        wp_enqueue_script('masonry', get_stylesheet_directory_uri() .
            '/libs/js/masonry.pkgd.min.js', array('imagesloaded'), null, true);
    }

    if (is_page('contacts')) {
        wp_enqueue_style('contacts', get_stylesheet_directory_uri() .
            '/assets/css/contacts.css', array(), null, 'all');
    }

    if (is_page('project-card')) {
        wp_enqueue_style('project-card', get_stylesheet_directory_uri() .
            '/assets/css/project-card.css', array(), null, 'all');
    }

    if (is_page('prices')) {
        wp_enqueue_style('jquery-ui', get_stylesheet_directory_uri() .
        '/libs/css/jquery-ui.css', array(), null, 'all');

        wp_enqueue_style('prices', get_stylesheet_directory_uri() .
        '/assets/css/prices.css', array(), null, 'all');

        wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() .
            '/libs/js/jquery-ui.min.js', array('jquery'), null, true);

        wp_enqueue_script('jquery.ui.touch-punch', get_stylesheet_directory_uri() .
            '/libs/js/jquery.ui.touch-punch.min.js', array('jquery'), null, true);

        wp_enqueue_script('design', get_stylesheet_directory_uri() .
            '/assets/js/design.js', array('jquery'), null, true);

        wp_enqueue_script('prices', get_stylesheet_directory_uri() .
            '/assets/js/prices.js', array('jquery-ui'), null, true);

        // masonry & imagesloaded for gallery
        wp_enqueue_script('imagesloaded', get_stylesheet_directory_uri() .
            '/libs/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);

        wp_enqueue_script('masonry', get_stylesheet_directory_uri() .
            '/libs/js/masonry.pkgd.min.js', array('imagesloaded'), null, true);
    }

    //for slide up animations
    wp_enqueue_style('animate', get_stylesheet_directory_uri() .
        '/libs/css/animate.css', array(), null, 'all');

    wp_enqueue_script('slideUp', get_stylesheet_directory_uri() .
        '/libs/js/wow.min.js', array(), null, false);
}

add_action('wp_head', 'AM_yametrika');
function AM_yametrika()
{
?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(75500323, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/75500323" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WMYHWEYZ2K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WMYHWEYZ2K');
    </script>

    <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            ga('send', 'event', 'Contact Form', 'submit'); //google analytics
            ym(75500323, 'reachGoal', 'formMetrika'); //yandex metrika
        }, false);
    </script>
<?php
}

function getDataProject()
{
    $id = $_GET['id'];

    global $wpdb;
    $project = $wpdb->get_row("SELECT * FROM wp_project_cards WHERE ID = $id");

    return $project;
}

function getData($table)
{
    global $wpdb;
    $data = $wpdb->get_results("SELECT * FROM $table");

    return $data;
}
