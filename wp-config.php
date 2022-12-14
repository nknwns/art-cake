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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'art_cake_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'cn .6puMnsYSZy.~[;cBg9WzD@Cy5z[*?7I0^NQ{^I/csuw4Pssx4kp.%)5WGe>~' );
define( 'SECURE_AUTH_KEY',  ' 6e3p93u-[S-D[B~|hSiT5^9~dVt:2ZM9&3B;U_-W4LJq+.SaFl6Jzbo9#UE=7pt' );
define( 'LOGGED_IN_KEY',    'OOkbAb-w{GZK]IzkPmcs80h@X>gq)Rz(L;)F.&V.!?t@VM8Hu/rF7C}%oS[`AXJ+' );
define( 'NONCE_KEY',        'tCYNWE3#blUuR{fJ?@k_E5v8HV3=QQ</9Y!-5I^($<Sq#@uq=UM[M|Fi.KK4qVRo' );
define( 'AUTH_SALT',        '=e~xz[q-63)~H/(,.>.!<cw$mS>F]8OW*L<g=FDxFsuyXxBAK=aY&|dN0Ww,96pK' );
define( 'SECURE_AUTH_SALT', '>c5|s{s`LrB![ p<w>.E|f9#A$-sb{ry%~MNS^sCSH/B]7@+qo32Cpu<VfuIgrC^' );
define( 'LOGGED_IN_SALT',   '8>td0NcE$:EDSzkc-)G)&>iN=xRv>rh1K!8#}`Zq!}T+Is(d3G9Z?|L$MYxCb?sB' );
define( 'NONCE_SALT',       'A%m9w%qUENjAVQM%@5L;,4l4q70,PT$%Uw$fnwccHlL{sNx&aU3hMF]?*VZEK[TY' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
define ('WPLANG', 'ru_RU');
