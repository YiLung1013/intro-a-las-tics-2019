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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lJ2r6,g6D+~5?IHS:[gs&K.Bl)mi{u?FX@7(QtSMRA?:GVs4ERHTM<,knw5.z#.;' );
define( 'SECURE_AUTH_KEY',  'NW))}+8G.p`MJ2`q?yqy]<=7!~:$*Y_6 9C^tw-^1a;1AYR3WSQfSb/Ah_h99S28' );
define( 'LOGGED_IN_KEY',    'u_A?%hGsf>SaHZPmz*@2H~xOhX<qKo=%L?:2@1sMT[|ma:_Bb+L!V58Hm)=9xZd_' );
define( 'NONCE_KEY',        'AnnW?pZpQ/y&Q}LLU51a^s6H~JVH-|?3,g|c:s]&Shz%~sa=yir#voy)A^,&%=7Z' );
define( 'AUTH_SALT',        'SMfLFjh)C7pJKM4%1r<:C{7:}Wl-cBid#iNDYBjpB]b(Wy51b3VkfxsK %*{i6:$' );
define( 'SECURE_AUTH_SALT', 'F=:D${**k]S~l;;NSFu_sHc|^iJL}nzFkTW7au+&$!cxsK,jSd<5X1nXk^T4nlCx' );
define( 'LOGGED_IN_SALT',   ' 2+_<`[C9lgPw@/_hA<$!F>m42/B),!2}Ru>mq&L8R;Ml)8C#w,sy88:+L.R?~9*' );
define( 'NONCE_SALT',       'ng|^}ig5`D#3%LkUxv|QJ_D2eXxL> aFKrtJ)2s!r_eX:rc9,8DpJzKn;4I>Dnxb' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
