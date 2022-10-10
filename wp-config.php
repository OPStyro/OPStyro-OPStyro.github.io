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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '1314520panni' );

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
define( 'AUTH_KEY',         ' ? ?PmwC(C{v7#$9bjiei?QX/6I:>nWg(riRc6rc|Jx?tLTdsYxJsmR`kajx]o/@' );
define( 'SECURE_AUTH_KEY',  '}16@t@x=.YF;wljHM];pW8>bpt}WLY[[ $pG^xYA7k X6t_KM8,XZxy%&WcQ(m}t' );
define( 'LOGGED_IN_KEY',    'z`}A29LA&skPed16^a92]X]8 kpbHJ:Axc8yza}uxvNwhU/|N+#}VjZ!g]~7jZ=b' );
define( 'NONCE_KEY',        'TzrQ-Y_L5PZc#.MfuO]-y=@O44t/]mxf*kA~L+33kPIxpmIeI5oiLfn-Qk.&KOz,' );
define( 'AUTH_SALT',        '71nyS>zY8x|Q:s*oT(s2qC-aXG&&8toqv7GQPv$!*[c$+6K3<*S{A ~(eEzsQ~[L' );
define( 'SECURE_AUTH_SALT', 'q/vVYsITLuj9`tyVNo.1*,d8elwXLk4u9u/Hi@n0]kQw{o&s!e8yZiC)qP**ZWQR' );
define( 'LOGGED_IN_SALT',   '%niJ+4b$Ww#+kD*VCUl?$1x/%yx|@=efo;2~/&JyF%][-s=IwJ!g1Hje$N[Qco>w' );
define( 'NONCE_SALT',       'q=V<v5**SKjS# ac~.U2yMXECZ%j7af:jpjaHA+k 0Z&v>`.i2-d%P.8 A!`<kT.' );

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
