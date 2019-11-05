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
define( 'DB_CHARSET', 'latin1_swedish_ci' );

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
define( 'AUTH_KEY',         'y8+.DAMn,Jiz!Jp0e1yN}0#&8]:LAi-B]_jMJK0r?{2zG8E$q./pJ&(PIuM|:YsN' );
define( 'SECURE_AUTH_KEY',  'AnM@#C(aP&r(BxEjEB#|Ru^<X=E;aI5TAfafkk%i8lo@8 w1&m_moSM2ch_2bfw.' );
define( 'LOGGED_IN_KEY',    'kQd~mx{/Gt^ZUg!TGD])eFXf=!i*d98XUPj(8_Ul;oSva ug0Zt8%30[MEZyzZC|' );
define( 'NONCE_KEY',        'WYR}$_w:NY1D)X-oljf$wc4SzrBw^WY S ^ $G0YZV9(Mo$]SP(l!%d>IKpg(GI/' );
define( 'AUTH_SALT',        ')f*D:q%IrVZg:!b(Ux$Fie`HTAxuz)8QWv5PPL/a&ZDHU+3w<?UhkvYCT^[(dl1@' );
define( 'SECURE_AUTH_SALT', ' Afw:Dl7@4=k`;]bm2LEQqjLaXY86By`cn;gQ>IiJgkqA>)/]*W^TH<>@)v#oJs-' );
define( 'LOGGED_IN_SALT',   'YZ3MKtO!l3*$Zk7!C-@z(u+(FV7EpTY}B.!~#=vvgT>wpKOO`.;w[MWgC,QZbQV,' );
define( 'NONCE_SALT',       'EW`y_5#eyh6SO?R<:jk=/92;&Ds9V`9yz&!-*3&m.&tVI &k<zg7ox:jxYLfeP]m' );

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
