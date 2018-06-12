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

// PADRAO
/** The name of the database for WordPress */
define('DB_NAME', 'eduardo-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',W)9@jBb1O|Uq@[et?|pr)]/P:sP[rwBhDYDQJHI#V]i<cd^BAP7NJ! Jy]&*`4n');
define('SECURE_AUTH_KEY',  '3qaxAP[%2W,z3Ix4KftP%|^agmWX#Nr0l~DIn$/cUA@J}cSY pX:~8Iq<nR]Td-n');
define('LOGGED_IN_KEY',    'Vk9,_8~]X{mpUNQ5Tx|5uA+r(Q! %UAK.zlY)#CkY1*Y{]fkq:67n*=@b*8v*}<l');
define('NONCE_KEY',        '?,#uGE`rxcrEW&0]5@i:Vd2>h~p4lZQ%a9sM3N2` v7k[J]UX!a]!{,QN2?R-d9 ');
define('AUTH_SALT',        '&*Hgi[1X6?=tC&6+y eYC<(qblR;ny~be^`f(JK1n_*TLbb.G.7.hF=bM|U[&/I-');
define('SECURE_AUTH_SALT', '/j F0bn&K=f5FjU!h%E9qgr,qe!Lwf^i$f<}bAj+pQthnlME_@A6&/1E~?mS~qR|');
define('LOGGED_IN_SALT',   'Bbx;.3WDa$:exX:5|C4)NMUyYg-OSzZBt~z93{|,+  v;h-e#uI$yc[|fXX=/o~V');
define('NONCE_SALT',       'XhsyB YD&s?Q9l8F&TKsJLB}u?i^{JuviRe7o{qy7jwSR[s0z`_,:CUf-U`l=bk]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
