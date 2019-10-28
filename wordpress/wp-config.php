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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'yilung' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mokouru4545' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Wyr*/HH5Y`MS6ML<(XB5=T0t{p>:sw3T+bc^zH)R+k.l%1r(>Dr5U-kK?D{k$#J-' );
define( 'SECURE_AUTH_KEY',  'J8m[t{2g*ZY$1_5:~wM}tsM#VY*y:49tGD<%]?]/wuD=`vH}-+jQ(OS[<(M6~;fU' );
define( 'LOGGED_IN_KEY',    '4yp{~7dXuA-x#HqpF.x_L<8UY-}DTML^) :t4<j@`O@:<nzX?ZsA_SYBGJE2?k[D' );
define( 'NONCE_KEY',        '%thkDTvVN2lIMM+@u=*z7PW2j1$2&3:Fb;an#-!*y*2woZ~FxU3,8nsLwU,rof2;' );
define( 'AUTH_SALT',        'KB?;UugQI2~mCEX[:Q5m>e$4#D8:oa=NEI:Xv0z/c<Da&>[bd,mu9Y;YM#A~yoW~' );
define( 'SECURE_AUTH_SALT', 'ZFXIp9Fxusy0@)DZy[%l[_NOo/_$>Ve@.%aJN:iLs$OBfrY1Wc7G7s0*3h-J?)MG' );
define( 'LOGGED_IN_SALT',   'BEqU|hRY@RJPkq#JP(*||kxW*s%zt06JyV(hmMsT+xo(Ry4JX`n/yg|J }MlNV;,' );
define( 'NONCE_SALT',       'r,UYcC9b:8YO^C,Uuxt*cA<jXTY0=dLwsKb%6=<V#5]CA~eyqme-A?~V9_g_881V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
