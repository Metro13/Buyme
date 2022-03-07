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
define( 'DB_NAME', 'buy' );

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
define( 'AUTH_KEY',         '^j$p+_)7;=opv:sugG a9z$^*zN,>m;GU>%:VTk`k4usp)5B`iM*/h=(w F`1b^@' );
define( 'SECURE_AUTH_KEY',  'J]Cf*hOtYD,a]Mt*R[T|~DA0PGwy:~E9PF`p:<Ci~Ok{xI}?,S6K9PEa^<+0l<xZ' );
define( 'LOGGED_IN_KEY',    '[vF<:dIQr??f_E~UZXh$+R%VS9<s?2?vj9D@>ZBb4I P$Xfl(E9bEnCXN*JXX(_c' );
define( 'NONCE_KEY',        'TN-Qc#ZETk4]UizEZ~v@1AuxW{8To6Gzv{=piPZdx!q.TBHCh?r/})<J^cS)X`#!' );
define( 'AUTH_SALT',        '%%`#&%o>R/%c3u/_P=[/C[9)~K+XfRm@>C_?OddQikGZg~o=G/8~cd:{V+*z+`[ ' );
define( 'SECURE_AUTH_SALT', 'Ir-h+1uE?*qF@!yK ^5v:nR`8ijWUK%!So%hj`c)zz|5/a.^&ewLbm)nqVl_S%Gs' );
define( 'LOGGED_IN_SALT',   'FcYKXA>@r|DH_4Szo?8KAHX?<%(5<OZCUe2Hl*[_w8f%l!j?@M1eq8+4{aESrY:6' );
define( 'NONCE_SALT',       ')eyZS;!;^s;%3dbusqDgQ/9HOA7mx#rVGzngM(zn$V8]#/Lll`j4iG/6*xVYyDJ%' );

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
