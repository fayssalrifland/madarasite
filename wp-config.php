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
define( 'DB_NAME', 'madarafayssal' );

/** Database username */
define( 'DB_USER', 'madarafayssal' );

/** Database password */
define( 'DB_PASSWORD', 'tcxLgPcMhg/qwXaW' );

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
define( 'AUTH_KEY',         'yNlVZ+rnE*>e|.s`pHC5bxi9p*x_bUHze},N5e3?:>O!/=mVfYhDX[&F.pDc]aJc' );
define( 'SECURE_AUTH_KEY',  'I,M<k8&=S0Z#G-Z2(KNQAr~mSAUS~3_WudPF=&=.}Ka}xG|Y6hi^H,13g>Is(r>j' );
define( 'LOGGED_IN_KEY',    '/P oJdQ;zhko+m.i@U54}WU`IKolIbe6<}!2V61u.qt`rj1Qn1aHxJgu]*0H1L_&' );
define( 'NONCE_KEY',        '3%N_o#=f#E})4gz95GS{sIl=-0r4C)3fUX8Y~@n!Qrl=Y8uwO}k3R[hW-bQr4(mg' );
define( 'AUTH_SALT',        'f{D$nz~Ot<sC_JM:ochj7sl*HRF.F~v-Yb-Gmd]0.P-2;!ZPp&g,gG 8(ocUVEbB' );
define( 'SECURE_AUTH_SALT', '7$q>{q$0JKjEDXX$s?^jRS_A0M~|{W^.7%],]!AZw6[h5Md0O]=}S%w@-Xm t_ab' );
define( 'LOGGED_IN_SALT',   '5 _qQ(!^^JWtt~kLBY8.rN1c~ja}bI:#`lFd|!t:gMSVa!;U1Iz1nK8AwPiYz$*x' );
define( 'NONCE_SALT',       '<J:=Y D|Mp5abqb~gW~f2DC-(c[2w0!=D[zHPma#QxsGSlPDz;<}q;[8i _Aq_x7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_madarafayssal';

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
