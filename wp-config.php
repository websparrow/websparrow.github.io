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
define('DB_NAME', 'stylekit-lesson');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+aCdL8uFr#x&h?P+zUNm2FXD<?#UUs`q,f/BJD)B{5rZ5V*d|r*{%*zD~{a:6mK5');
define('SECURE_AUTH_KEY',  '_>eOHgOw}z2X~d(&7SVOpW^!x//187/N{K8}<.<5qXs-nrUk8ujX!cJLSK</j@j*');
define('LOGGED_IN_KEY',    'Og`ioXC(1!6:Zoru<%k}{{=eEH@YkY`OpwA4I/<y<nxKW:t<Xlj8xmc=;DX;H?Xd');
define('NONCE_KEY',        '2U -Gf0ZKQ}I(yWk6I&C<h$vpS_L|{zl&In>bT:gp@/7<s&:Ft:8sQUxy@.=x;m6');
define('AUTH_SALT',        'd_#JLAnWMj-Y.{+VAyg.qb#6@<2!:prC%M%Xw[S0Qj:*wGNUL%Tf}MbJvjC/fRkp');
define('SECURE_AUTH_SALT', '^%IjAXuaLs:od[IWjrXa#oLV;`=9O5*@0~vV&D#W?v/5T4WLPGoUz=r7_-*}^D#M');
define('LOGGED_IN_SALT',   '|9=2d]PmgxZ:%XKs0}7xi<~Npm}Vi=vrU!5IT8d)*1JYTBDLJNywo*hB9#z`:#P!');
define('NONCE_SALT',       'W* ^kOSU;=v#jrDf)=?<)j+Sr7XcCj*mLTdM|:DyivR<TuCoviM9uFWs,D.~yH]j');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'sc_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
