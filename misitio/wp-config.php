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
define( 'AUTH_KEY',         'U=+<X;earq!#K1K4(rRTii`@M)7)_~zg?76&L$9AO-z!9HihdTMRdABu,T;DS>#/' );
define( 'SECURE_AUTH_KEY',  '^XB3|J>C7~zhe$yGaIKV`>YF^vEx]b>uJTyDYOlI~FQJpLKL9#FRQV4,l.)db2cf' );
define( 'LOGGED_IN_KEY',    '>)g.j#tx?3=Kc(m:T+gf  #E@?&Q4{SCTqN!$.:sYxj9h[p/_29!owYz}T4E@uT:' );
define( 'NONCE_KEY',        '5#Qn+g$xDG*V5CT3jEDX~T_(H),|ZW9Rqt:?UEEw Kz~I_A@L3uFzYI7d/br, +8' );
define( 'AUTH_SALT',        '8J3Aq}TkQ$N{,;f@LaEXfs;wocsXk(wGHav/nS]>#Hu,(%F)ja{}|jS!g!m!Z$~2' );
define( 'SECURE_AUTH_SALT', '~2A8~*DLV]HD%+_:()f8 {4l)yqZg])`I|}e=H<WF0CEHJ7:m>z+&;~;mJU8x_.4' );
define( 'LOGGED_IN_SALT',   '~?oZcL0Y_yy$E9*Q,9]`s#-S[w*$}RzOxVCA&foSvbM$AWG)w53=oa|5kkE|mGF?' );
define( 'NONCE_SALT',       '?GRi5TxR4T,~TN[,iuskyFoIHi.=D<#sjIPD4fe/x6Mi`A0css,vaXb!kCY7ZA8q' );

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
