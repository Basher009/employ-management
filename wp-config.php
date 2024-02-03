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
define( 'DB_NAME', 'newfo' );

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
define( 'AUTH_KEY',         'Gavs9o*]J9UQx,DFS{9rqYgz61_Nf&@aYiwM(`m^XD.G4<.@Y3t5NkVSanXeH#L[' );
define( 'SECURE_AUTH_KEY',  ')`BivpM=rV-.`&sJIv,rMKStC^X1WSxa~es<<DxkNeEQ<E]DiOY7AqAkeM=1x<vb' );
define( 'LOGGED_IN_KEY',    'EKoo199O6(cqz3?;@9>t2LF~R(y7R5s=ytLlIQb5Ot5!:k~Ms8;~2Rm/bsL|+/k[' );
define( 'NONCE_KEY',        'n|2gu-S`j%9041[d%r4Hh5(}j5192{Vc@ac+lf1?]d&4Nv8ZTOP 2@.$3}!}de8R' );
define( 'AUTH_SALT',        '+T+.YD_*yfs1DKQ(_q>PF*Xb#]~o[nE~uXC+|0y7zmT0O;|}3y?o+[*dBL7(M)T4' );
define( 'SECURE_AUTH_SALT', 'RjrugRIqBJ`WQbsyHcR)GaR<xMBKjk#V]5>G(g>3K8,CgUj*O+epM0hzQ?O1J?<$' );
define( 'LOGGED_IN_SALT',   'f9jb^Ogz$5rKM!^47noj0q$#%Zyc+llE4x(J[B]u0xUM*+cVHQiTBF$I7`6n|1ao' );
define( 'NONCE_SALT',       'm]xDR8_#c0u(Y^m llN5wS[7jLbU%gdCZ^NJCCT,R/tEamL&9`0nW$r|tjX<>?]s' );

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
