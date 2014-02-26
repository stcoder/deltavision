<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'deltavision');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7Ot>za&GE]5~6.uBFbHmi9=hYP7-0H5Rag~ILN#tIGm1kGug?f1~+bGbKdmw4JI)');
define('SECURE_AUTH_KEY',  'R-O.:+xZ&tn2ai`.J;!SN+SQ ,+8-K`(1v|58 W)YU:G3dmZ(Dc0h|L)cRX8KG9b');
define('LOGGED_IN_KEY',    '>tLBHs)zD_WjSVn7IhZ=VfR1lA4#%I+x^al:.x<AySE.m/ow-a @51+,[q9{f/J0');
define('NONCE_KEY',        ';o#|;PKlg`}j4tU=l^^>@>}Rd5|+?uh}-sm>ndu:-dqEmH?mP+Nu4L&%C13hzE+c');
define('AUTH_SALT',        '$TaMSD.JwG%`kp|JoqW}x;J-0;/hH:|OqWq`BTFm%w)eVI;1dh{<gsPr=KP2xe}E');
define('SECURE_AUTH_SALT', 'fxSSaK@AtIIB|*Gr2MdW~6c++Qp6!rsXJ[+N-$mL?|wQ;M(vlq7Dp+CpL(yew0I9');
define('LOGGED_IN_SALT',   'CLYul|2LQ|C-!=6=gxo|p&>uvzgsz6o)^OQz&.0geZ|?By<!HA@FdS|po4;?cY<-');
define('NONCE_SALT',       '1{5[(8fvn]<U;Zk-1UwLM+ El}=+micB~y;f%(+,.wDnX;L*IVS++1-j_jQ?)U`M');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
