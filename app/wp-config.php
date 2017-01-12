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
define('DB_NAME', 'wpgulp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@.k0S{WE4lv =j^mjlqLD6[b<xG}H$vt1-g-ntD=t!,f/)uNAl8JeW`wHY&GlqBZ');
define('SECURE_AUTH_KEY',  'fQZ<fk kQezg{<,N<|80U^1a4h|hs(C[=GQyP9N?PU8;&)q4u*-RptACQCtT)93y');
define('LOGGED_IN_KEY',    '?146(73xuC+W OVl4jji6qCrq^r%w56&DO^iLp?p{0;Gf2O[`uXmdh+wjZH[l&rX');
define('NONCE_KEY',        '>XyeUGM!E@]dqEr3K(R7tj_kgZ9XMa^QGF= Ypt*BD ?m&5+*ZC4?epj]s@kg25r');
define('AUTH_SALT',        '{lq]Dw%!-@,pL8+d&-:sO6tY?OelhzwCR@u=W1I}V?/+a0i3syf;M  jhIVe98|h');
define('SECURE_AUTH_SALT', '5W%+Q?2=r1!;T8kg>g=(neC4j[nvii>wA_y{hf--^`B.;zNC.JP/W0y{,oYVt@y^');
define('LOGGED_IN_SALT',   '9@ryg/];x5beMj{_&8H<4[ T)- hY@(1uR~pHFk2~TU6RTKuRvud}Z:GEJ:!(NDE');
define('NONCE_SALT',       'sXr<p-OzrB(jbHleq[g+tif};%dXEHXXkY zI*t>&%O<6 umk6b5T9xP]<FZB|c#');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
