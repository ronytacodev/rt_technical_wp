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
define( 'DB_NAME', 'rt_technical_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:33065' );

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
define( 'AUTH_KEY',         '8pAohB0-dhc3V=D?84C-Kr6^a5k#CR[QT]UY_M<Rp1Y#ZA3myMIJzeqL<Rv &BAw' );
define( 'SECURE_AUTH_KEY',  'T=[jEx2{/Pz(4!6WktcF={E0;l&A%[ZPn$zuH{1wPLZ|:If_p>f_x$x(d{-4}K-A' );
define( 'LOGGED_IN_KEY',    '7yu|G(a9/Atvos1$TB@y9ZXR2)h8pTb|m~q10#X#*,vQm$-k16XtW}cHn>MH;v+6' );
define( 'NONCE_KEY',        '&)?7;6&Ie}Z)9N)zRTV>YsQ:Yf&#1k(^JLXiC!Qxi(|ZXfxS~<k`Jw]e2{=EK|`v' );
define( 'AUTH_SALT',        '-#!t8^S0+/O;t]!^z6/M6D!tJa~*FFy1=4-0.G%l+qiG.xPn/&}C*.jUUwk|p@UK' );
define( 'SECURE_AUTH_SALT', '=7ta[?Kl] 8=VHN<S4fMO,9)_M2L(f7l_Q&P^bG}=&:Av^. o8pLqsR93-zbgG7(' );
define( 'LOGGED_IN_SALT',   't*NFF#>Bhkpn%{ATfb.1EDEyKHgiSu-nso G*z3TxIwX8P /~N8dZ0$,/2ytRo/n' );
define( 'NONCE_SALT',       '9~-e)?/*{7|6[RehWc~X!{ 8q]V^pDWV!]a.Zpd!_yD:VKWtH#[n8YC}wzg}{:7j' );

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
