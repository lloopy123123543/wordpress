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
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '>tc41n8@~dn0;I 5<~Cy-tFdZQ,7_>w HIrbp1U`js#m,w|qz32xSLb&44x.hSd=' );
define( 'SECURE_AUTH_KEY',  '&W!Q>Qk!W(mz^Q-i)iJ:I#EHdNcy<aDw;{{^$M2ty_W;p=80Ox*rCGMr`7H5 L/]' );
define( 'LOGGED_IN_KEY',    'a{4h:V*OQ5;mTs$~0UgN/OTb0(Z#)e*L.k3<d}ceUYJ5*]6]s;nsp(nv6[prLZ83' );
define( 'NONCE_KEY',        'Isat`79z0C?wz(4Edz}Q!LpV[dqHzHM8wkW`DcYsljUd2wdCEK^K3f+8]92311iE' );
define( 'AUTH_SALT',        'PeYbd}>0T$j%Y>VvyAXW{e~1HKw#$&3k=f*5w+0hv+1m0eN!__{3b$x>F=YDiB}|' );
define( 'SECURE_AUTH_SALT', '477/AE1<26Z}=+>*$Kt5URkMM`ZtkRd-6A2r[<ba+*kOD,M,L>Sx&R/cR-]b+?Gc' );
define( 'LOGGED_IN_SALT',   'S]H#^{hI5@Jqc?8E2dYYqQuZA3(1i|Eo]e1<q3rxIl1Cvx;)Awb]SlkrsAakEOyJ' );
define( 'NONCE_SALT',       'zDN2^NE1FKqx``;jU2dhdY 39]u~}>W0^a8F&g7BN61`^pk>u>z/W/pxbjm#]CxT' );

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
