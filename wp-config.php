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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gsph_db' );

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
define( 'AUTH_KEY',         'hDg[`7@+8a4GS6?nlMd`C-HtlTq_U<hdexqlWdpr:Ohw,5>&E%ClFCI6]>p*K9?X' );
define( 'SECURE_AUTH_KEY',  'c@g^qa>u8]_7q=2J://T!Z=nEuvJUmuOUv.`vZuc9sIU!jyRkNvrm}eK*^}T?MrF' );
define( 'LOGGED_IN_KEY',    '11fZY,d%)kz47K0{].$q*75!|pSpiUd<GKmvL*w`gd(70lcGOTE,*^Q9`Z]d wK+' );
define( 'NONCE_KEY',        'eEt8PU!>=@+nPC)4lot47aj=11X_a1yXZd(^44nD=ig D4F*5VZ!;HGdn^`PHbsC' );
define( 'AUTH_SALT',        'yja^rz@vvx>B.XH?Nc_zCNVixW]WfES2)fF,_]0x?MyPJ_o- x]VsSOW#VbHI3-5' );
define( 'SECURE_AUTH_SALT', '[nlLD3W8O)I$<Wd_iXc/$jlgOb3%5jveLq^L~iLN8l!z:e]v#:dyGAbG(n=zRFE#' );
define( 'LOGGED_IN_SALT',   ';1O! >;]{G0g}/rvQcQlwT.KM:rb&.N-*W#h)yP>HOsN;#D 0xaDq.MOL-eY7Ymc' );
define( 'NONCE_SALT',       'AQUy=syRXiRpuuj-~1!!Sb6H.P;Zh6|PfdGr4)I!*X&TO;zpwI RCOFa`TktGp*{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
