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
define( 'AUTH_KEY',          'e|;bOKrNA]U`sk{4I.XK(#7HjSggVzRZ9*VnF#vjh^?qIE$@_)G]9laz*65f-QX)' );
define( 'SECURE_AUTH_KEY',   '9xi%uPm|F>fnR9F%6a_K|f*[h^uX6Ot//+5g`FkM*YJf[eP*Cg3h$q$lWz/Z*30d' );
define( 'LOGGED_IN_KEY',     'Bw#yR5|w.#50G@VsQ_D:UV9ra1Z@@o3b2:,aGUj~<M|WL3KO]B^+k)D~jmO2pT5l' );
define( 'NONCE_KEY',         'CK2v24OK`g~+(WyiZNDqp:H6OI3LW3X8~ZC%P^U-5UX49,mY?1L/DhW;w6pQgR/A' );
define( 'AUTH_SALT',         'a2y-CpF2K?c2eM3aS4,6=/gEo<0&tU,?&Ea]xv$% U_G##/~~sX[>W^nh)*wslnr' );
define( 'SECURE_AUTH_SALT',  '|-^P.bKK6(c=!5eY?QMiv3-;;]EaczhYCz;O);Bnxe^Eo6OAr)l<_&zDXjVF}ej=' );
define( 'LOGGED_IN_SALT',    'p#X#ytM}I6c:Ql&x]#C@ h9WPq=W7!{^i^M:L~`aGAO7> M%tIb8KrMFs,s1jl[k' );
define( 'NONCE_SALT',        'Ed}xG^n/_.xKCq#Eit.18g,HeF:EpmORf eilUenmZv4Ks*dL,_ .zKWdyH[k,QQ' );
define( 'WP_CACHE_KEY_SALT', 'm=uPe| l@9G%8k|!yPgSVl3%Q{QI)(Ab6bX-*(mbz%((?+OwQEp+c oUl-&$3f%b' );


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
