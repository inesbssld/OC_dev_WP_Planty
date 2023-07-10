<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

define( 'ITSEC_ENCRYPTION_KEY', 'IzUmUWA1YTZBcmtdSjpDeXFIWCt3RzI1Vy9LUyQ1QH5Sc3QkdHslLXB2Ky04MTlybHx5I1EmKnlrOz9tfnBAYg==' );

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
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hd3rd]9W7DZDpgIRqWjL:C`ELG3`16i/ ,N%U65 j?b.B!Z%>H?T}&dhVwWn696+' );
define( 'SECURE_AUTH_KEY',  'Zatsa2K)63.P`gN$(8rA m?@qyiFf4iZ!Jlzgm7@e^-~``sQh)3^N&R~neVCf!}$' );
define( 'LOGGED_IN_KEY',    'Yw/)rGG<xR0b<}?0W&#YRkl^GYn8z1]AguSUX2R{GMnjA3hw=21.],Dht,^7R$IR' );
define( 'NONCE_KEY',        'jh*-um~UdD8MHTO:2%0^| #2dMO#jVBzCpPmyQcmkcrCRz:syeEDBaGPA|E;qu1O' );
define( 'AUTH_SALT',        '|f*9%&=n+7t[Sba<48e;VVDR3b6^M+c%+V0%.X)js@{P8wh[qiuJ 7eTZ#t6y{<.' );
define( 'SECURE_AUTH_SALT', 'I~s3gsp0zSUleLG0Fm%.Y_6p!].9nSM9wsKGK%5LU@fNp Ao-t-3s6qFcIn9@{DI' );
define( 'LOGGED_IN_SALT',   '$EBluj=+>!#{[C,@vDLR:zf!kyrW,v![K$yI_hv Z?*p5nW9qj|T)wBbz%|$:0/[' );
define( 'NONCE_SALT',       ' FN5tHBhK?Ga,rbF1iX,.jX?9S7<M$W>~kpD`PeCuT*kPQ.FgW!SbZ]sVzM[X;uU' );

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
