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
define('DB_NAME', 'hairsurgeonindia');

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
define('AUTH_KEY',         '5s?BE}F;<TqIwY#Hr~CED4uD}Xf4(ccq&*TK$nl(n7ZY8IuvSDPnWeWAV,JS|^<8');
define('SECURE_AUTH_KEY',  'k?Yx)v[QkE^!VSISv.^O0U= >C&Npfh7(i#<9 RY+Wg8w4rxBiG|H+V^,@k[_^is');
define('LOGGED_IN_KEY',    '5[N]S=Bl$wI+RJfC/3o>r8< kGrerIBto;NH5::*dl#nMc(&(]DFz>d2$Usy2Nz%');
define('NONCE_KEY',        'RU-Z)`SMdULcY0A>K#([aLTDF]:eH=Y{W7#D4,%&=+$kn*;v&e}ONBuX_V{imlsY');
define('AUTH_SALT',        'hAjcR|_Zf/$2h2c|N $vCi}5K *#?K|9oW9g3/ ]QKN1xP1wgNgh95olSl/oat %');
define('SECURE_AUTH_SALT', '%&LM+7L%;lO[-Twy=*:bn!fra|Jq/t,-0.d4.85rwaOP0|f=E*N1`z}HSz!X-l~[');
define('LOGGED_IN_SALT',   '-N||Tx%5$G9j6LOg5A2|!%nT_y~ m|X7B~lIO#S jXFxm** 02wz1p.Zl-HGmkJh');
define('NONCE_SALT',       'YJcw~-aKGkY7%+Rx;5I}O.Adz|=}#^M$(G^`Lok@k,$~hPZZ4>AbA1~57s&*&2W|');

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
