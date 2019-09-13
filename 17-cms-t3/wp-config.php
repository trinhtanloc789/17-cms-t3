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
define( 'DB_NAME', '17-cms-t3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '$8E>DJDi9w91*8*rYd))y+af>>eCx<^A*`Oy{ak[mv!^,tjq9LU~U<Eb7/gog7nQ' );
define( 'SECURE_AUTH_KEY',  '~3o)F_Qd-%<.j,H%j%Swh831#Po||Yb ,&bq*4+n6IMdpP]eamgL:}z2R&?4/;Fg' );
define( 'LOGGED_IN_KEY',    'iL$Q%)4GCHCGMXcOQl>^;w8|yh@L11s*aC{(B.4v~/YMuMef74rc>^{tku/TDi1Y' );
define( 'NONCE_KEY',        '8C#[h<6PlbujY_a+lLBR.n$0yb7n]hVuF|]^uW%m))^@go<s &W/8|EjPb4yb.=*' );
define( 'AUTH_SALT',        'w@@.l;QDB:%[Aj=K.z//0}7`i_[VK<Sn-^d[9NT(W#5#(s=2.~vPb#+$3c>%kxDt' );
define( 'SECURE_AUTH_SALT', 'n+a>UI[6n7O-:p6>v80xKb45Ls+`s`o[&sYml|/8z5x_Y(!`,8J|`uNmFE<^-_V#' );
define( 'LOGGED_IN_SALT',   'R;@ )F7~WV)/Oxt)A5R<zp9O_mK)atvLSV$_aN%}tPC$zK:j^eVATOtZwuPwLqRH' );
define( 'NONCE_SALT',       '3aX<2GxD.h>/vTGp5L[CWlD-(NDs94;y/EH4=z5E]+L[u8s=[NM]bW]=1+*Gs~6m' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
