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
define( 'DB_NAME', 'football' );

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
define( 'AUTH_KEY',         'Qk-cBs81FkpjH?[WBiI#L9y,BFEhrr&b{Q`krGi8-7q;b^&%5r6!uyx84nx2kVsU' );
define( 'SECURE_AUTH_KEY',  '`s,^y)S-h)yLw|QEsI$t@II6Y?(nhp<TAWz^,?;6Pa9@oAD^HPii@`z4.A;f9J0E' );
define( 'LOGGED_IN_KEY',    'P-BeWSyIq+/o j5x:wbC:[Y2_j#CYWX8(;z6_YYkQWUL=k1e=E3-;8=avOQ*^0;=' );
define( 'NONCE_KEY',        '*CM]B/0#iJt;BZ/W`cLk3lQRmN{8D3,>@}|IJ&n=C!?zJ<Z$(57$J0`v7f<I-Q07' );
define( 'AUTH_SALT',        'FXRAkKS)&eKpXAhLHhAMo*sR^qW_E+X#cxm|0!7n+G-blpqcsC0NdB0|eM_oeSJ_' );
define( 'SECURE_AUTH_SALT', ';8rG=.a;QuNUl1lX9FFO)=fX!Tn!L<-U%):>*jc8{e4qfo-%eQ.>mg,j /-v#1Z2' );
define( 'LOGGED_IN_SALT',   'w`jzw(YN-ATk1;9!3*jLb:^]zpQC.h+,4-N`vKraTK:,_!4*d?A.yH_sb7kY0>_#' );
define( 'NONCE_SALT',       'f_SzO~(1:0x$xw&})fz5}D(45>x=GBbCV%#-e>Lfh+vIiieh?W&^v#fh,dp>i`5]' );

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
