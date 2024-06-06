<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'somewordpress' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'db' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6Jedk:Q1Q/1-HaIv-Cf09721~0leA[le*A@Il$h*p!,/XSDZT]4XC6|Uo O>a03j' );
define( 'SECURE_AUTH_KEY',  '3:9,e{?i!Ji$eWwY?@wYf8+.wA#ITRP12S[P#f)2>,s_I&t,Uic@/aj&)]X;0PkH' );
define( 'LOGGED_IN_KEY',    'wjgbM/Bslgz8MpOiVgonO3XPmev%lK|pQu*xNsv=>UhLY$xE@LTgbqpiXm$B`%-1' );
define( 'NONCE_KEY',        'ee@uUa)b3%%G/kr;[x%GfU15}GDCxAiW(6NyZP fwFhP(nNH?=quxmr1iWBHgq2Q' );
define( 'AUTH_SALT',        'FRE@#6c8Bx2+qI2xM{//1jWx.](3i~v D<Sx(oZ[lVEHWqeV%OSF0ipc5/Gjk:sD' );
define( 'SECURE_AUTH_SALT', 'D4GZ<Et2Y6D}$Qf2BvUh)E}r0h8Lw+&&}Q=)}rce}pj3+{^=DJlrMx=Fj_(C&VO_' );
define( 'LOGGED_IN_SALT',   '~tjrLS-/vYJAQ=Y!Q== w25IM%O>pOSPq3B@gqWN9=o;8Et1dGQT0lkNv5/K|U8o' );
define( 'NONCE_SALT',       ')pz.yUh!VV[kYG_FeghUwIiEa;+?{>+Bd!,{w#SdrZDa{0yUkryG@7@p.Gs(ayU@' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
