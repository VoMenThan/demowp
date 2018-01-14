<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demowp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0&|3~,RLrSR9f<&-.<yj5LB3!ImE!ZN~i}[X:04vwB2p2FK40lS{~8{|*(#f^Kih');
define('SECURE_AUTH_KEY',  'sK2V?,{3C1Sef2}]^M$VK;h<6-AD=60!@m<B/y6-2(((&!h`A`K>Qx-Fb*D@|FHk');
define('LOGGED_IN_KEY',    '/HWKHNV-aib_CP0T?Qx_X,v=K2[k6^vMaNbla0vXm-Cz>&S<LHC.<PQ-+:E,u$g+');
define('NONCE_KEY',        'tYI&R.C*Oh.P]JP;|^8[8%C9{%&F-w{j3rwAQE9`pKc|&Fa(TEk>UofS+-s`63hq');
define('AUTH_SALT',        'YwizZ^e>+0YHw5Qk([7Rh2]+:Kr/1I,w{Z6nBTPkzq|wnrVO4w=>=I{{|t3X0x[8');
define('SECURE_AUTH_SALT', '(mih.}2+ttO[3ZwvA1$9oaMySwlnrdQYj_h3_WMcK!r)Udy>%EV[tmHvL]js4Lh[');
define('LOGGED_IN_SALT',   'rC9Kli{T]LG:[x7/GnN6zJZn7oa:S&Y}d]CVo:720%N,TZV*X6Gib0e.G*p<YTG0');
define('NONCE_SALT',       '8{xSuElg{=_|@Zhh<%Y#O$:_*l,0C6(tLilKxQ.p}]+y~1}jV9=bI,L#>tKXCCtC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'demo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
define('WP_MEMORY_LIMIT', '64M');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
