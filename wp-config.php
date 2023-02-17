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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'week-6-assessment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '?,4WE4!z6#h_k?K5mXO!`&<=F+p>F]5itm4w-zUdfBwTu^,ehHzSb&^uGD$b,nHt' );
define( 'SECURE_AUTH_KEY',  '1S,Wpv^ap,7X}SjHmrV>0/2~(^o$~$H$;RGlJ]FH`wziNZUE1tqnn>E~#xv*:T7u' );
define( 'LOGGED_IN_KEY',    '[}fyd+Rq7RFZcIq&j5NVM(XhIdd}<z7v(TkJXz(8 6`Al[6_d_[?}2o}`.9`spL8' );
define( 'NONCE_KEY',        'J9AXT_G[u44lOGz]kT||+L/DsKvL~?W+PIN:`C_lRu-`~ht/2H8 7K|U.dF@S2m5' );
define( 'AUTH_SALT',        'Q2;oF`Tg*?O}M94NjcgF>4!.TL}+&6~**oV|!2{Ogd8`piUrtK&1si9#*igPn/? ' );
define( 'SECURE_AUTH_SALT', 'voB<,5hJ~[?9_d3Pdxh0}GG2c+=0vbig=s^-a]>4D bx0edmHwr`R%S,sJhM)N&%' );
define( 'LOGGED_IN_SALT',   '!NIOp8M>1tM=x6 @_~Op4L]ki|2MYff#?] 29m|s}XgBLzH,P8dYf?Vo^lDTx#Z|' );
define( 'NONCE_SALT',       'D%|5(c/t*%]TSieRM$+h`H;UeP&IR|_>4TyCsoo#m^mPSC,N._Z[_F=TRe 93g+D' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
