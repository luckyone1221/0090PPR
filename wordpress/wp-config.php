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
define( 'DB_NAME', 'ppr' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ppr' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'X0X2UbxKmE4uyAll' );

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
define( 'AUTH_KEY',         'M/V3*|Q)5$6d6d0SW9?p!c}c<26#b~qM!O.U#IP]h_B!ahyn*4!^>GnO<+{}W-`E' );
define( 'SECURE_AUTH_KEY',  'j}iwiiBmYQ|_OF/h|MKtN6x8]zq-$lto^,|Rs*XTrjAiS),Pq8%|-N<oLpeBYcT3' );
define( 'LOGGED_IN_KEY',    ',`ybN:i1+I+G=s!:dW~v9TZlW#8AV.f^0CxO]lTN5DMjDeC)O(y$p}aAzS?O?Z:5' );
define( 'NONCE_KEY',        'aHB60bj^1tt(~$|,+,StfN;bn$zCOoHw)@$>xPGA`=&jv :vaXH=0?Vmt##(CTG8' );
define( 'AUTH_SALT',        'Y9SE=_J/n9TF%#6Q?;^$H;.NE}I,mR&S.T;k@BS7%oCCO]etqb$&>?c(C8g-.Y+k' );
define( 'SECURE_AUTH_SALT', '2O}4zN@|J[4YvBT-a#7Zb86ZCXOo_~t,gX{d%MJ8xs(3JdaivaLP6Sg,,7F1@<^s' );
define( 'LOGGED_IN_SALT',   'ssjQdO8?0?r+B^Mx`|[;e5+GTy@qrtn:*<$~3H](BvX1[a*O#cX=Z]]Kv-y|-d$1' );
define( 'NONCE_SALT',       '5.u4Ds$:.eMMj/ToI:AW+6bB<NgzTmCG3KQJN}`HY4Jy!.?/|Z,zaT.Ifh?+0J(o' );

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
