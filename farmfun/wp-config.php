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
define('DB_NAME', 'farmfun_live_bk');

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
define('AUTH_KEY',         'RG0^gse.e@6@zUOaQTjm@Z4#`!xziyp6e5)vHcd@`WDZ|yKD#^mE^%wO#xn0aX, ');
define('SECURE_AUTH_KEY',  'b,X,|]P4g=ofSgMoB7inf}^33iE9HFcW-FlX!mSym5x@:hHt~>2*]`TZ{<O;@Huu');
define('LOGGED_IN_KEY',    '(uL^WC<wnMoyI|QSEB/6,S1{)cv:qsTS+D8M-=y:*N ^QHkYE_;,z^|(Q:-D~OtA');
define('NONCE_KEY',        'q1`Myi4`?-[WpBPo,V4,aYUHpBX:NY?r>?6yDyK<BMN.W_,l!_M/pY)Sp9 Txjz|');
define('AUTH_SALT',        '17%tt`6Qk)r$^QFX+Xoh_$nw#=Q9+%4[}t~m8%lglax}`O~X2+D~jq*]m0C|TqSO');
define('SECURE_AUTH_SALT', 'aVqRqLZ%8xjK[nrE?R() E g9`O:4?EwphM*+4^T1M+>T!bGLoXMJ VP8#?qTG#9');
define('LOGGED_IN_SALT',   '_h;9(IP|tKF ,7 (Ick@7)`888+B`~`3k{VMt)XzRv6+0/gA+/F Ih$*f|$2<:c)');
define('NONCE_SALT',       '3n9Pj&}vvgd=t2GGUuAG^/8J.#)LX$I|I_^)`SEJ];gc[L=QPVjFE[9^B&#CNQZx');

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
