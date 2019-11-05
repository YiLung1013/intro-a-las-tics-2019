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
define( 'AUTH_KEY',         'Q[WIruFJ.,.BAv%,NK1{L6AiMPWP[[NE~59>C9]j.2z]DUXoa;k#{1@Ad(19caAd' );
define( 'SECURE_AUTH_KEY',  'Rne}_E}Dmk;g&~g(StiG~?1qU^L89p#sfn:A1l]9_XOWSx$fwFG;ff6[GV,PXke%' );
define( 'LOGGED_IN_KEY',    '+qjnI<Z=>[u_w9zjLgO4p5-=A4gu:OUz,Y8~+MUPm.khHPOe$A:QP[I[Pq3/y{pK' );
define( 'NONCE_KEY',        'a}o <qlAT:;Fg<Lz5HdKDD3Y5UT=]^5>B>gcHZbgt> (D[,x^1?x>u`C`+9(B~b5' );
define( 'AUTH_SALT',        ')^V~yZITYv!exOACAi8ZK:5T]BCKd}M 3v>i7-F;(JJe>,3V)&KoL/G o@mqKcB|' );
define( 'SECURE_AUTH_SALT', 'n~#X!lou =ED,;1bK6hi}&/]LVK~@zSGpLGZKR~^8_r~dg!<BTzcA^(aYwZq@N0J' );
define( 'LOGGED_IN_SALT',   'NMorO? xR/oG`Pf,<dzXmct3<7YgSmtF}NX<m{N-dt7[A.QF6C&{f`AQo#:+ih|G' );
define( 'NONCE_SALT',       'Cv60gjWIFW!hSDy;u:%ukZU<Mytv7LhNWB8>JC$opY9IGFdf{=Fo}5R2Qrp2U`py' );

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

