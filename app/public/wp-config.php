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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'NQJa3:<Wk6)1r7;10_aYm<-h85itU1:y,hRJ9d~J%896ewQ4t)~[lZg; &6,H73#' );
define( 'SECURE_AUTH_KEY',   'm2!&^fZ>tcEtf^%JS_^d Gc4 $9GVY8qb+kOU))}`g5IphHXXMF,`I~%vFu $^t#' );
define( 'LOGGED_IN_KEY',     ' ^g/Mhtj$K9,kF@[@l<v*5QkS8[e^S@G9svca>UHdD rx>W/Bd S?u$<dUl;)E|@' );
define( 'NONCE_KEY',         'owW2fu[@v=,Me^Qk%kQpsS$uW)bdN>%>Xm4:m|]C5-rb5G-SJ?Q`11Jf}<^<@!e@' );
define( 'AUTH_SALT',         'vpP_|K.< X+56z~p>:ATn_/u+~R0Q*t3w#EW^,tsZw`-c2D7(tfDmt)*sdh~e!VR' );
define( 'SECURE_AUTH_SALT',  '#6d>V7$S6|idre RFdg;tP|5%VlR}z*[6Iq<x.oSt_@L-N@!2R _ldvb/%~?Lma&' );
define( 'LOGGED_IN_SALT',    '5+^:~n)I@e?z3/.U)8KSTAO|O~_[Bd_A7?u-;K5]08<j?63xriT7>?@)lV@:>Rw@' );
define( 'NONCE_SALT',        ';2cQbn[,~N}+/X-S(P<9-}NHqE0OL8{D.!QgB@~+Xk+-MZ9A6b1FwB aBX?.Q?&{' );
define( 'WP_CACHE_KEY_SALT', '@_i-uW9K a5^Ge6P:(rHBstH?w|!@c`:RcWUsM|`KPhwUm(lTJcJhge6cB-)2)}^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
