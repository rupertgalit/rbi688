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
define('AUTH_KEY',         ',Y{,~Acpy%4JX>a~yrQGzY=2By{C3{Z7{t~b}M`[p`|POQI3DfQ2LtG;V^o=T[oU');
define('SECURE_AUTH_KEY',  '?&:8?iEM*TkE}.m0p~NE1LZWTM]@Gj:#Ar$0$Ig~~~F8wa-u7[lc-9kW=J@A?~*A');
define('LOGGED_IN_KEY',    'rz-!C!@_b=J(mvAsfg8TB>)5=zlzu*m$jF6RnOx}GGD5i]Hx3hqot#2`-.nnfX@g');
define('NONCE_KEY',        '^x-|nV~VWNU#*>]e4v.eI-MG^J|Au9 ,%KKkTw5m2PFDz+8M!>:A?+1]Z>i2NQZF');
define('AUTH_SALT',        '`I?Ogmu-?Rp~|_L=CBkt|X9+06+B.sq+]+dSLD>F;|-1#=g?<w:l<9g5xd_P4G~p');
define('SECURE_AUTH_SALT', '?>i8gxnTYocor@z+_OTiy&$8V.-R[BaBu/1 H?YhWB[||M7%O[oy2i|_OAl@DKv8');
define('LOGGED_IN_SALT',   'O]amOnXRD~PAeN[!Q|_bYsj1|&7Y~l$l!{-|||0<F+olcE12VA9B=,YZRN.AN,%&');
define('NONCE_SALT',       'E&-t:TZQqQ2pCvH#0)^}7>.jz,v(z.+%c,1eoU594x|)/Zw:rj>_-6_np);`?RO;');

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

