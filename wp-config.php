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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'db1' );


/** MySQL database username */

define( 'DB_USER', 'admin' );


/** MySQL database password */

define( 'DB_PASSWORD', 'chanisadummy' );


/** MySQL hostname */

define( 'DB_HOST', 'database-1.cevyoti4jyvq.ap-southeast-1.rds.amazonaws.com' );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'OOlPh_s1MP9D6q(^}QxtMVEK,>BA.jvVpA#9]SFs[jpxRmE-u@3,Pe8r4M%9O4w)' );

define( 'SECURE_AUTH_KEY',  'eCq@a0e,E2}$2 gCn*7359.QoV%^(47)#k9z7~^nTZf#4-ts10f8=6Eux+x&m7t/' );

define( 'LOGGED_IN_KEY',    '*ZWi8krYJy0*c>E*hW)ilS(:9vW?8]u_]RVUg%5=0l07r>YsP{YZz<*C6SR_`+V?' );

define( 'NONCE_KEY',        'Sad^8LL<};dzf&M+P2Wn(G>Q15@dp;B_eG-sAtYGGcvR4Hhg9w-6&iJA?@O~lHIc' );

define( 'AUTH_SALT',        'p, wa6*n8ZvEBv;[(sr 4@3?^`/3Po?SUV[[O*)C8}mWbw9-$n^#2j6&Kp|3_wVy' );

define( 'SECURE_AUTH_SALT', 'mums`d0{d%,X9l@<GyDw$;0<N|@mw^_h~j@6FDBsRhAN:Sk2?NBk!1%qR]<#6EyW' );

define( 'LOGGED_IN_SALT',   'W1F@E5EQUTCr%g)P`cgG({9!Nw[M T05h 8#l3p9!?>cat=RSm@3?{o~dV>WFZDJ' );

define( 'NONCE_SALT',       'MEby=lb3<HE%}3/z?6=c)2iWgFDv-%:x*&~F=7Kamt{:-)Y7JVi4e#~$r#x$abVA' );


/**#@-*/


/**

 * WordPress Database Table prefix.

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

define( 'WP_DEBUG', True );


define( 'WP_DEBUG_LOG', True );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', True );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

