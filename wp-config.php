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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'victressv2' );

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
define( 'AUTH_KEY',         'b>J*O;ArI1X6?#:Jg3@y|>rDcmszQ$P_IFjmcfCm6uL}!;;?f}Ns~NI$Uo!r!K%Q' );
define( 'SECURE_AUTH_KEY',  '#aw`jxa)84G_RPyXyAo4`v?+)pR0,.zn-<#9R1 ]<v31N>JDuGlE=3w%Ioc@q&D3' );
define( 'LOGGED_IN_KEY',    'MIU)~n)#|,V&>v>2[~O(Ju6_y>J1Z/Ti=Z<UvTEwUe~Ful4Nkz^e.6Dxb{DDs_IG' );
define( 'NONCE_KEY',        'Wo4Kwou!~|qqaUzi0Xt+MJc0r*.?h>t{gN[z9>.OI^w0E@:wi=sL6MemoT 9sK@o' );
define( 'AUTH_SALT',        '!>-U.2l1!.0-e+eRw>Mr*#}aZ+j67v{&F UZto$uS[jF-d89<~!0zeI7R5zXV~TC' );
define( 'SECURE_AUTH_SALT', '9L6j=cYDM39*En0@zsd[#qIc<Rx )c*mhPfOcRzs@dxynFA=<S$/W;m_u*kX`+UX' );
define( 'LOGGED_IN_SALT',   'R)EOvKcB[aH~xDu&v+ ?77ljA}tnHxvPQg|?=INZRWDrTm@+ph^u}]bd2E5pZYy,' );
define( 'NONCE_SALT',       '&;jV5Kkr.M_f<!4.~?@D~)*nN6-,lDfzTm(2.}}s2?ir.giopZ&~[5:Mh8Oe-/&@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
