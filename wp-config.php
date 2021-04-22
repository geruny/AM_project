<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cb15721_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[Q]HYeM}C4`@/02Y,kZt-n#1u^v{._INRg@nZ?a3muNy,!ihp4v:myWD B-[MMKo' );
define( 'SECURE_AUTH_KEY',  '%@`Uq]5Oe!,vhcqDsR*OfTcVkwxU<iU{dRc3#.pKpI45tYxF(GF>[(-Oh|mf$_ti' );
define( 'LOGGED_IN_KEY',    '>GT| 0.fZy9qIbigxfqq!%lP;kz]YuK2&9;#:qFi%&h<PYeNQ`:NC239zj9@JOTb' );
define( 'NONCE_KEY',        '#o>X$O#G?[ NBfbkZ0@,[H0{4uAE/D};Z78pR-%Nhmj D:-s_BL vtT{VcUHS_W%' );
define( 'AUTH_SALT',        ',6Y2gXqb#^!%@+NBS@+-(hZr^uo!+xCUe).kiV_(+2k,[r&2*o8L+J%VuL!NpX?<' );
define( 'SECURE_AUTH_SALT', 'Yu= nt:&qQ%Fw1Vc}$pCwkoM]QJld0,8?8KMn.qggBwNYwt_v$<opTv_f7w>PWE]' );
define( 'LOGGED_IN_SALT',   'kwuumk]9!Olw<Qc!5,y{o<[Ca<}+j=)Xd6s$]X5^hr0qmHcn;~93j6???pUz]jai' );
define( 'NONCE_SALT',       '_n>I+o+uhX&r,HdQDvl|+TVr6^hrWJ54Zi| T`?`rsOXuiT^M8%I}[52]evNU>>G' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
