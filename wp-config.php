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
define( 'DB_NAME', 'protur_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'wh.S.j2UcxG{S%|D+jz|Rv)Iwn|^dK@!dIR-9F1g>XPmyMQ8gr~qL`Pd{/4h$%_k' );
define( 'SECURE_AUTH_KEY',  '8-f^^#<eg`|*5;As>& ?PK ,EQL(vJR>?mum_d(x{SLph,Y@p*<dEQL9VHM;Q^cb' );
define( 'LOGGED_IN_KEY',    'a@Q_Lx=BBRFPULzDg<1g<;1rO,UTWe+Trddt)W`vb#LH)A><uRMet)fV[2 8!R&T' );
define( 'NONCE_KEY',        'U#?fz<>{:QJg;&[)bJ)`s!)lk>D)Vnx6~r@/d~9[Ev,_91*x#(w_Ez)tP9lN&`JG' );
define( 'AUTH_SALT',        'D.tG=kXkHd4.)[D+d33RA~L;3.c4L9{Gf6InOE3wE?fE8)j2h:TDcZ U]p_wnQ9M' );
define( 'SECURE_AUTH_SALT', 'gN!L|) ~ELC&oL:# ~AeEO5XA)Xj30-E=-<MZDk*=MH~h^Lsfiw0V3Nit27GHr6E' );
define( 'LOGGED_IN_SALT',   'c83M_J!fv#sLGhlvyzq7GhBT@EO(0N71]a,$g%t~RvuJ2R89OuT>c|yRtzYkX&Mp' );
define( 'NONCE_SALT',       'x~79Tj=T}:eC+z97;&beoBUR<(^klQOGxa%dH0 =l?;_=Ve8-;(6273l>{q?ES!;' );

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
