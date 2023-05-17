<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_rbi688' );

/** MySQL database username */
define( 'DB_USER', 'ngsi_db_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'M2TU$YWF%RAD' );

/** MySQL hostname */
define( 'DB_HOST', 'ngsi-db-server-2.ckihoohm6pyv.ap-southeast-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/[kmd%~tG^ I09MQjh/>+`[-thXA3,z1kM`BT[L0ffUw`!+<`CMet x?TArI<F}!');
define('SECURE_AUTH_KEY',  '3d.xYvPWg#xdxtZk)`^%$t:#UqXI)*Im6XK>ze:JHW$%NSPaaM}A(YCGMFA7)k|0');
define('LOGGED_IN_KEY',    'ty+u25H[BO%#*9:zbWIM!wWp`cC(G83Kd8-3Y5~0zjeCwt44|$IqOZ-U<{y)n9`+');
define('NONCE_KEY',        '*%fwb7[#5]KZ3%9=;=$J-||<U:~:rVqnUwub`#f2xuba9{jM6g|@G/B&c{vk@X4.');
define('AUTH_SALT',        'q 5TD![ hqOY;d.FB;i,vB|{A73k|V-|$5iw*5|%pZ#;-PU3T6mEIa-./sq[2spX');
define('SECURE_AUTH_SALT', '-d|39v8ucQr:Hnb]Jw<_e}HhJ-BH+|xrRu1h;1J4$+,FEG&%.F]OT1V+$bW+u=Y,');
define('LOGGED_IN_SALT',   '.f8:(G+T<tv8-k*9o$Ir#+TKO[|*nZcSe*Bk:3|0:M6)MA1N$J+hz4CQOV_G=3gT');
define('NONCE_SALT',       'Z-|<??_qgF;4jBGs~_</:,!|:qQx$bDhnLCititiWf$t-}Tjj@i5x4)Cn_cGlj$,');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'DISALLOW_FILE_EDIT', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


