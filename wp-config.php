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
define('DB_NAME', 'onlangshop');

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
define('AUTH_KEY',         'fLr!%y}#kT4^V~(:h@)S@-p&N]eGV+Wqo4VOgqDh4|Emza=#3)CPtmc*/AxSwO.D');
define('SECURE_AUTH_KEY',  '^U5D0@;OV!QVgqNTnv6.n1K17.Bm|7hT46l@4|B+(/xvL5#q]q1;j_0ssMR>IRLQ');
define('LOGGED_IN_KEY',    '4ku$n#dL?%o^&nI=|V1sVBR18;mUl+o.Yqp]h=&cr[HLAVlP[Q:GLmeeDK_.1K(4');
define('NONCE_KEY',        'X^JV<`wT>_[U^HqlQVBxdy`!tv^Dc!R9]|H2W>T1+gm$jEm;PqseHA+3p~=HQ5#S');
define('AUTH_SALT',        'jNd=zD&@MZRvlPUPeRbT42T2_HwVp}[G-+t#{CI 3,-%KA*KU>hG~e,}Q^I49C*{');
define('SECURE_AUTH_SALT', '9~wt#g0$+Y$OzA[>#)Hr7;ua 1R9i~{Aq:>dG7=qMRUhE+{DcWp7s<w$-WXuylRI');
define('LOGGED_IN_SALT',   '~dVIynDSM6:h9 9Uwf<!`/oH1[}Kzx-zhKPGQRbE1gD/G$u91KZw<o(*Fcy&T2+ ');
define('NONCE_SALT',       ']O[KSj:zJ),48t]Od~}aGDoTccN9X+aV|&O}dB,X[~T*f<Ud_#ETf^w^*Q@}`0,C');

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
