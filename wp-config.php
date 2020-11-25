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
define( 'DB_NAME', 'u1214100_default' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{E?MJc|^hOToFQ$RI?zN/`PfLdf |5S6c~W#7V0/0[ydm~iE.lvheWUvBn1h99vr' );
define( 'SECURE_AUTH_KEY',  '@|j~6cPe#g82}]XN=,)[G hx[SXk/_>eIn?2P>2afB~]ibH1c7Cup0](C:Z$3/| ' );
define( 'LOGGED_IN_KEY',    ':=^*~Ix*a&zwZucI[LZlMqzje2T90~`?.m6c]2X%W%aFPE1J4vYuU<FPfT4x4(te' );
define( 'NONCE_KEY',        'Gdbj:KX,UcXB5=,1Vp0PTMTZSGy9zkH25Rq`U;qM_HOItB4;%FcQ`IZWiEHAJtQ4' );
define( 'AUTH_SALT',        '`/ee))~M8a9nNBts|awwOWV7:}q:Si^1{VCLp.{o2ulg~X(>OJ,8eBrvr/S+0Tk=' );
define( 'SECURE_AUTH_SALT', 'Z/HAQ5g<0Ci}=?u{|j auZd2gJ=K:V}DhtU>)_)amDq?Co!LK,5K0uVC]<Y2%$ui' );
define( 'LOGGED_IN_SALT',   'Bh|h[GIT%/f4/Y:Xc*+sv{9&{xk,)<{WTm?zsOB^p#FS4^zd49a`*bv%KCF#?!| ' );
define( 'NONCE_SALT',       'Rp4l-wX*{Iq<nW(_NI^;+:k%SkYPlu~).%bFKjxY^OHTBLq%e,M;90#ZSop$,eWP' );

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
