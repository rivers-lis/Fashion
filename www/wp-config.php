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
define('DB_NAME', 'fashion');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1:3406');

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
define('AUTH_KEY',         'b6%?( 5zLOd2H&ASXl#Z|F>KP_6:|aP)wPsdA%GxGeaz|?+LQ!peG+Z[qwK{)><K');
define('SECURE_AUTH_KEY',  '>H2o<Iw^kUo{OH)m^u-Flpfs+7+@Sz>{7{;G~HAWS+[Xp9;LSY^nr}izW `FgFq~');
define('LOGGED_IN_KEY',    '6Y`)77F-9qu^ ^Q(1ka;b-mejdP75XKED]h=vp-FV>CL^q)-o,%rjo#EnV a6)!{');
define('NONCE_KEY',        '+r|`4DF|]vNmO54M]|cXIe*`{4-wC$KEi1T@F1V_-]iTz8-Y=TExJ@(C(NI,>%k{');
define('AUTH_SALT',        'Dty|NH2<vzT!<r59bKGvQ4hej})O|TW= gG!(Q|1O(kV}d>O]@Ky1e-Q c2SfMoN');
define('SECURE_AUTH_SALT', '&Ax(AQqe]V`RLSG@k^/%30}{k=}F)D@KW88D},G>WvX|{ kG1vlB6O?We9128n|r');
define('LOGGED_IN_SALT',   '$<)!FO?]zb7$=$Mz0?&-YQJ1f se p%)F2+/;8$-r[bFNrLD&YQ_jl,N=#38G8vK');
define('NONCE_SALT',       'Xf)P(}9k=~dXgK.7rZoso$AhX-pUi i&&.fgC?rozyNCJoRwxVY!6Nknf-+AwCmQ');

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
