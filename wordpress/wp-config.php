<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'benaxford01');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BXK+N!ey;jSU)?X,Z4W,:)UJz42`29_nHbu_Joy[g3hs~foDtNlrl?:FtHaZ+aZ:');
define('SECURE_AUTH_KEY',  '9]|+im_sU!n%1~z2b5yaC!:TXZ~V[grL<NM||zaMK1`RbLx2>tn~tE(Iue7qVua;');
define('LOGGED_IN_KEY',    've8+iFt5?prdo3p7`|!*(KPrhwKi9$E(>C>,f8x7Owa0vM+Hphw11xpS)i95kpgc');
define('NONCE_KEY',        '9ztlawm/C](4B0[+Jtr[:7#ULsOUgpN09^uj=V*J74zLfY:A~NpJu2#,&K9feZxo');
define('AUTH_SALT',        '^RmYK*|.eNx&T_Vu&M899B|IvV~_jjG;}vl[iz;NhG[NaS!~n2O3UCNW[sl!szqP');
define('SECURE_AUTH_SALT', 'ri%j(3NtJr F5HQIR>N)8l^1yQ?3GH>9!B|iuIq*_V]QLiVv#k4}nxk&`6(mJ+[o');
define('LOGGED_IN_SALT',   '<2Rg#R!<k@xe8ZQymuS<r;p^%&q`]tYF.E`}1a7.2>LoQd!!Cs NxB0)3j?g5{x(');
define('NONCE_SALT',       'Vs[PWr4sD%y51`8<6yCK_by9Ra(A,fF(OW6{o)Whq!kFg-_^&v%ObtO3Dr/aoD?O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

