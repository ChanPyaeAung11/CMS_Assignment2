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
define( 'DB_NAME', 'db-1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'chanisadummy' );

/** MySQL hostname */
define( 'DB_HOST', 'db-1.cevyoti4jyvq.ap-southeast-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'oCiUE]>`O(xL1l1qQ/L$!mz<jX}4Ve&V%-Gcc)6juee[tFt]=~]r8*Tuj*I5K]e+' );
define( 'SECURE_AUTH_KEY',   ')Fim]lZHq0,TuV*[oz0+@/UY^k/A:@=l&9x7 rG}k|08n%+iv#V%om2UH7HM$Ns3' );
define( 'LOGGED_IN_KEY',     'u^%LPSWOFzYb/.+V@>/@;y$L:Oxy+&k?zX,?fDjAQ[ex+57j;_,)UN%Q+rK:;dj|' );
define( 'NONCE_KEY',         '}*$vCL.awRt[EVDMj~hkMNXLKMt+ B3gctl*#><X-`RVXPd4#5Yf$>bPTeKG%ay9' );
define( 'AUTH_SALT',         'wBzr?);yq8u.5BW Mg1y Q[ KV]Q6%Ty7{doJuc2h*9YZk{_7d<grp%0E$}UCqTb' );
define( 'SECURE_AUTH_SALT',  '7`*OesAD>^*5CVN(&k~,[Akl&5(yJ1QHDKN%toxV`{d9Q0~c9.d(U#9/Ef3i|jN(' );
define( 'LOGGED_IN_SALT',    '8Ju4uw^NE89U~c!a;0TvGTf$>[n+r9yOxo#gH;$0e}c*?^l-XPKN/:<Ruv`Fs3s:' );
define( 'NONCE_SALT',        '6u?xU[LEwD:sn@T^1)_i/#IR;.^mI@7k3!>Wh0}v#O0zUEs|mt6F08]XLz^#9E9k' );
define( 'WP_CACHE_KEY_SALT', '^cZg1{&jJfxfhIeUqEt,|qJL[S<|-8Do,,9lbnF,XB!l$@hPk:EjE/?1/bfH&uF3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', True );
define( 'SCRIPT_DEBUG', true );


define( 'WP_DEBUG_LOG', True );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', True );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
