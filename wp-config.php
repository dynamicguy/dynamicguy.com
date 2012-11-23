<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('ENABLE_CACHE', TRUE);
define('WP_CACHE', TRUE);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dynamicguy.com');

/** MySQL database username */
define('DB_USER', 'ferdous');

/** MySQL database password */
define('DB_PASSWORD', 'f');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f#|F[]]dLX-~-Ax3>u uDC?*(fO`Y>]+-&%[ Ukp:L`/c)a>2(I~Qch+3Exi|x(k');
define('SECURE_AUTH_KEY',  'YK,+Us|&G$`T?^ mvE8]!_36q=|cvso!G>%/?&z.zJkr}-,F9DN_!U22UkF&.D#q');
define('LOGGED_IN_KEY',    '_U!}Be4|;CwN5|Qf[5~e8k2+,|l6+Lq0$eZVh|YE!u+U=!_ZKg0:*z$Ly0trK%!r');
define('NONCE_KEY',        '.gC//JTk:7ZkI^XFT *_6f5S{dR){Qx0pb/Xh{Q[29zgH/9|5q[8R5ilm&SoBuO%');
define('AUTH_SALT',        '}Nv5$L9]N#)24FH:l;,Qbs.+?idSM$=K!XsZt&U^t9li;Y*~G/]$zxO}kv4BqE_6');
define('SECURE_AUTH_SALT', 'WD&hBM/C-qkp_6q%1v3yBHie4+,..G~#rvopV/B31[1BUslA:sMcCq%cNwKW,=uW');
define('LOGGED_IN_SALT',   '!iZb< f7ou|u_(UoS8#My-)xXS+$s-0r/)z@3bD!lu3Mho*G-$nQmL]PH=k#NA,m');
define('NONCE_SALT',       '0?$r{>U!bdv^oTuem`#4-{8akde7rRzgkLko6x8uJ;B9vwhm-9*(@*U!:nu6~#P9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

