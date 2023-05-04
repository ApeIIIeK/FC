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
define( 'DB_NAME', '1823-21_meadowflower' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1823-21_Lenchik_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         '/pi^7Be/.KKn<7G$/g2bw>VxQGr5>m(EPt1ceK{m oRw^{z?UH0(S5iVM;95b:,$' );
define( 'SECURE_AUTH_KEY',  '>)=]u9N@xSxXm&e?SL=*g7iz/lV.hbQ*&Q+383A;#*)<?q6B8:hLdv`URiWX{*!e' );
define( 'LOGGED_IN_KEY',    'G4Qu]xSMG,2(:v:dyU||>.F+3vgP}KRE$:yPMlFO/2oEy`6$+:XuY2Iv3p}yo#/d' );
define( 'NONCE_KEY',        'A!(il_!2$dqE2|a.464]3RDh&wj36#v/di.GY#d_/b}Wp^LAJ/D<S&{#I,lflaQg' );
define( 'AUTH_SALT',        'KXm>0H/.rD}4+i4S8n?s- Q6OfDbeW<0uwg]tcn=/yB!u|D^&DXs^TfmT#fZe88h' );
define( 'SECURE_AUTH_SALT', 'jbBE1dHENh[eW~oiCet%csVDqxhN0:8`f}@_}igrrbfVzYJXR}9|SqhJF#=`nB;/' );
define( 'LOGGED_IN_SALT',   'zfa7#9@k1x[= olm{8Z&Pdsjhk_]q>Ey*9$$28&.1Nd3k)lOS>yTIx)_!k@Nk{/n' );
define( 'NONCE_SALT',       '3+YE-Ri ?)E4S]<AC7wO!)b)xR~eJr]V;t*sC@VD!AJzK14$c4Bf[ih2#;T~3|2^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'PRvI4_';


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