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
define( 'DB_NAME', 'garden' );

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
define( 'AUTH_KEY',         '_i6W*g??oYHbPA4Fiq1$c#)bc6aDwn&t?MoN?@G,{ceNI%gMk!8+Fh5.WLD$NP]4' );
define( 'SECURE_AUTH_KEY',  'd#U_NCy22.r(Cv,7y9;:pm1p|:9J=;;W! n5Oks:,0#xdp/=pkDU)h2HKO@XV7V%' );
define( 'LOGGED_IN_KEY',    'r!Em?cyGMf<o1$WY&,#x^95;#Oj3!6LIVmjDk*my9xe*Lwk&sv3R24RC:RlYhlVg' );
define( 'NONCE_KEY',        '6=nGb0|O@./VEB`/l{evF{zT/OZ0t5MeHoS,X8Rx 4o5!S//#J%&V[~%A3-[b,TY' );
define( 'AUTH_SALT',        'pBSw(WZ>nV,=mTPx72BSzOo-Ye|9~+u@M^mNwhe9N.cV]_Xu@B0umLw_0rkmtZI6' );
define( 'SECURE_AUTH_SALT', 'Hkul1&keZ#|JKVXrS7oIq:4,v4ANG%}ZmHd0+?_j#izqxY<0{T+24Y<&{/Bs|:u2' );
define( 'LOGGED_IN_SALT',   'YD|uQ-<%@vJOFZ-lo3Y|8hYZUQ6|^f,p p<2mP{/3o%8&?v_Jq$yNuC T_rI<kp~' );
define( 'NONCE_SALT',       'cq/Cc)9|o)%8e!$!^&nrjv`%g]>3}!88twLBflRw_Dnjg/^(R?,ZF$G;s@vgtq]5' );

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
