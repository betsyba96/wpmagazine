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
define( 'DB_NAME', 'magazine' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/80' );

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
define( 'AUTH_KEY',         'iiy=,/a5{uB.#YUg(XEIpL/ogN9:.dkpY=SLjo`;KzpJ0t;+(?]5;qSZ|<AEN5`L' );
define( 'SECURE_AUTH_KEY',  'Y,C7C&@fhaqt{aH4V#0k?(&^:&;]T&Md/m$Sf%yG}!m4~Su_W?j^qjt8Y2U#@E_5' );
define( 'LOGGED_IN_KEY',    'ONk2zRlQ{&TS$h(yE2c}PvM?,U*qu6xfBZx1^HIm:9n|QKHej,Rn=MH-f;z2^i=J' );
define( 'NONCE_KEY',        '<uZC( .@-eBb`,Wr >7`niGbtDy|Xk#-=F}P)I7e7m{8Ie]:,qHN}Txg!usOZkop' );
define( 'AUTH_SALT',        'bOCDmT/F^wM/nICJlU5R+hYz;LWUicW}nRye{P>mzC]D%fft}_5kN$jfE7m,.g;{' );
define( 'SECURE_AUTH_SALT', '05X+A:#1Xa7z`S<0`h:,qBaIIejK50:tQRAkr|@`,n2KMORsNYx`x`MKDh3`bE~|' );
define( 'LOGGED_IN_SALT',   '-MzmG*TrqS:`^Qd4tq069[D&:nlIf.H?4Ge^Xu{EPD3lCP4`;!J.XQ(rWq~&=n4{' );
define( 'NONCE_SALT',       'kTdd4ta|?hbRGL9RczAzyso3n>G#N* KsTmOO6+Ix_3|B0-sFtBN4n7XR9P{aV<3' );

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
