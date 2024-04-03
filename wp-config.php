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
define('DB_NAME', 'dangquang');

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
define('AUTH_KEY',         '=}fkBJxwbfbS{/Z^;pf4a :bY^i64O>NyrP*Lp2H]M<QSEkv`fFRqK<X4=tA~|sh');
define('SECURE_AUTH_KEY',  '[T :/gH<8r<uKb ;^RS]MI.j#(1)Yp=4}CC^6>H7TD>{[n.c4=rJoSo?b$ha[tys');
define('LOGGED_IN_KEY',    '[y]%:!Iv?RYrDaVLj&Za^d,n$`:}eU8rtE IeM;I[E@If5U_ZMl#+X!A`m`!d?hl');
define('NONCE_KEY',        'ed?Gu%nd]K(od6JEFaW$l^w[UBx8]MFBZ8r8=DTf=-^/2pQFelftt!zU<5B>nh@S');
define('AUTH_SALT',        'kkNNff`>*/`nQ]EnrN.d}lC!?Y^<,b$*iKn{G!Jv)2`f8+>7DX[`yQpN[mi~5lkP');
define('SECURE_AUTH_SALT', '5mZ&!8mA^GY(W@@K8}3;7@X^bB{9Y9_};rbiM+Ol2eeJG?-= SvCJX-Y`?!b+1N<');
define('LOGGED_IN_SALT',   'Pw?{e~Sq:@GBcJv#`iWW5Jh#f:=v?:$y~,4m&gni1-mvCOOm^;kQQ!beab;]1-a]');
define('NONCE_SALT',       'Qic#oo%3.f7fPdP[4N/^(nT.[lCDX+PUS8LuWXo_eSenT OHX3:mk;L+^zp 00IS');

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
