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
define('DB_NAME', 'u608891118_onlan');

/** MySQL database username */
define('DB_USER', 'u608891118_root');

/** MySQL database password */
define('DB_PASSWORD', 'Coloterolita!@#$');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.vn');

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
define('AUTH_KEY',         'k6`Wy%TJpT|,0-)N38t92bw_WG(i2&bRlDqcb.Ri0p!}5,1I:Ue{S#4|=@A2KU?@');
define('SECURE_AUTH_KEY',  '%2mJG`z+WU0yj~~yLBx^lm^SwW6NX$*ocI;oUPIwFCXawW/o>Xo}(IY^)@y~%C e');
define('LOGGED_IN_KEY',    '/%a%0=tX<x~JSD+$7A>Ej-/*q!A(oCRr|99V`:XY>o!sKM]o[Ta!kvlkLg(SI~!R');
define('NONCE_KEY',        '* zNR[K|w1|FA}`8=$+PG[[ :}F%{BK7B8C-(T>W1Z%{S)p5nR8HXFb&{BG,LCJ8');
define('AUTH_SALT',        'F8-SWY*~hcGu_B;r(#n$7{osGhDfOF9l|h<lXw(01Qd^|t:hQ=dk;4$/%<FVyuAb');
define('SECURE_AUTH_SALT', '15xqKLAm`r=tV}4e5_Z5_=N,`JlkxWhZ^Sq8b0>FNB;Vw.JRZZ`x&:W)?M^ah7Tb');
define('LOGGED_IN_SALT',   'OzPnEVaD3MvtZy9|BF8Tyr%y]]km<_5Ri)#_*SsKEd1rwQ}.JP5]<WM]}?vFxku~');
define('NONCE_SALT',       'bYCb^}DrS{`m56V&U`>rKq@=(eP.p3Sc7BxvcPb:f7%bdNK}IZs:A|y.e.k#MTNc');

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

