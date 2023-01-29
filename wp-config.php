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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'wFufkiy!q.R>e)~TIDf/PEiJRS3k*7Xl Ky}^2NEn#`{QSM95+^@1M_uYPbXpy$|' );
define( 'SECURE_AUTH_KEY',  'fV:~U_:/s?z/($R51?/{<|!jv57Xb}4qoUi&@3l}G?J4.MfB(G 3^<Q>K&p1ydtO' );
define( 'LOGGED_IN_KEY',    'Y2N`NO=aFnED&&Ly]lH@YQCiO<}=`xnYrfj$I/~{Fr=tKxo8s]2|L;[?8cb5$+Vp' );
define( 'NONCE_KEY',        '?KN-x`xUiog1R,8%Fo!9)*M8-M#n{tN*s=pnL|$E%7O.Be^|S9+g:RO<A=al8qwV' );
define( 'AUTH_SALT',        'T-Lhd@t+:5l4+g/>wW9=6lF@MQA]~P@@[+c!.+0.?D~wfi.@OwuCUji;x)+I_nY)' );
define( 'SECURE_AUTH_SALT', 'EkW>!HZr(EY?14| DhJJ`T*n#Cj5ud1e[P1vl#8A0L%CZ|1>9<Gm`wSK<PSbW2) ' );
define( 'LOGGED_IN_SALT',   'l,qD#}o+GeuqxOCKSV-drJrwHW{VAN&}?}n(sjuz@0P-!KBs%:x*86gG:CzAGb,n' );
define( 'NONCE_SALT',       ';7k+6NUKG-`WoT}tlV9E_doMRL/C~H &I Um7am 7APK6JE:U,FqLP 0,k8-rp]@' );


define('JWT_AUTH_SECRET_KEY', 'secret');
define('JWT_AUTH_CORS_ENABLE', true);
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

define('FS_METHOD', 'direct');


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
