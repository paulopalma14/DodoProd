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
define('DB_NAME', 'dodo');

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
define('AUTH_KEY',         '^~_w.{s54|C|0}Heej1FYw1[@)5rKBqGT]L`BWp!MqB8y[mlR(10J{*][_[&>A%~');
define('SECURE_AUTH_KEY',  'bF>,<8H]IykzrAH61V=/[]T0}#&]ikn#Kq$&kmrXdHjNOe+z_X[&@F8gW!_6WD_$');
define('LOGGED_IN_KEY',    'T&}3Sh/F{=`8Zewc/.Uc>iyF.?c3no32K}+YXx+heS#}y$jM[d,g6N[W`-2Ts|Tu');
define('NONCE_KEY',        '/v(!lxWhXln!9R]Y<<WX&HoG%95u/b2Rb&IZ=p|gO8W*[3+r3r>~popKxmOkROku');
define('AUTH_SALT',        ';=6;)9<b6H1artKCdek<azFsBZ|%1O]]+%Xw(0Wjy>$Wt6R;irQ?G8FG}?DQaekd');
define('SECURE_AUTH_SALT', '1!5pI6)0.!Ed5B&sFUY q3P>uAJ)-j&/Z{HD`py&M6?-d{%PVm9,.|I9{q(l@k!T');
define('LOGGED_IN_SALT',   'AxbU|Q[j+l?q4z<8n{S:o{O:t&;;.FWB2?Tg|)Mdb)do/s?%N8Roc*y^,^872tc;');
define('NONCE_SALT',       'dx2rOM!v@eUYRcJj%%`[6PCSfBB5!`O`X}bR_R#5F6[8$u!;kPL4-^u,BF@jj~6)');

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
