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
define('DB_NAME', 'tcf_culinary_architecture');

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
define('AUTH_KEY',         'qEd$LOXL$+Ss7mH5*9py2|oO[Qk~m:7{[OnQ__wgzD!AX4B9Q-;0~B4HQG+g{m}8');
define('SECURE_AUTH_KEY',  '&j{Ecm;=SigC+~paHJ|Q5gI-Ny+YalL/+!I+i@s@;SV#LY[H,+5j$~-?Q_BZw|o3');
define('LOGGED_IN_KEY',    'y_-U9O=n).+}?n[,3+zG0+emo+I+^k#|Hp|87bx<Gixu@!n)! 7IeYEw~kVJ1ics');
define('NONCE_KEY',        '(8PK!J-td|wko3i1QO9ea+-GUqK(e-EwKX-$,x+UrT);mY.vqO;H@ Ub7v6o|d1?');
define('AUTH_SALT',        'G+8>^$hh1}rXbtU^]a{1-sU<}8z2:?VwV+ymAq:JcyG#)[g}=ocI$uge%N6o3T]r');
define('SECURE_AUTH_SALT', 'ncVD0RvbzEwWl.ZJ2tO3ao>{!%iP*-!v@kD0Q7U@&#Lz1F&gGfMS/&-bWN-[*M!E');
define('LOGGED_IN_SALT',   'lt+#;dw[uI4eBH+YkB6jnWb,g^}QWv5 /WUv8:: +CFh[UTJQU+.HRirq-,2$a!_');
define('NONCE_SALT',       'af_V,F:ikcWC{f6D9r9>IGP3&+|>$(X+~j6|$J+D|-w MvEI4VWUH((_JW@Z;+4^');

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
