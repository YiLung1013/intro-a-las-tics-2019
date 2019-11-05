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
define( 'DB_NAME', 'wp-blog-2019-2' );

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
define( 'AUTH_KEY',         '/;:,2Ow0hk<gJ{6T)QBk&Q Lp_cnept6n=7-EmNY]V@)mW~S07z/UzI}LaFStEQ<' );
define( 'SECURE_AUTH_KEY',  '>LWZJ?klzZrkC0pnS0FHZwAo{tlNw6*R5xezj)R8KM,ou?0F-CQ7U=`-}>x4^3)k' );
define( 'LOGGED_IN_KEY',    ':~5s+kO3Eh9ZQ(>*!of()qD5TBL>[d0e!o(Cd_e=xRnVP$UE6}<z*~O!q51wc}B ' );
define( 'NONCE_KEY',        'A0Y9h4IeUJhJ;8hemYZq;+~3l(mvC/mF`HkAb^J6O.}d>;cU+M#xrf{5>c6:2qw}' );
define( 'AUTH_SALT',        'ahdYKV;TOxp] 7<9 bzZ0o4)`:z6[2TwhN!p2vEde{=gb8M|P_FTYv)s&E}eVS.}' );
define( 'SECURE_AUTH_SALT', 'Mu%1u2k v-y|yt+lPoRijIf<S|wZzO:SHsa8+X l7%v^98QOxt7YDgx*1 YH1 v5' );
define( 'LOGGED_IN_SALT',   'Q9,M &6rQ+P7XIVf4GqJ DU?hj,feedAG0_Ft$8#S>!t_KGBw<-h-=a=!U,l>%Ee' );
define( 'NONCE_SALT',       'e]U,V<;o{E5j~H?2U;f?$W^w#dH1GxP1@L&T<[kr+vYF}0F;ayr*nFk[>EY[c*U)' );

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
