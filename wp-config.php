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
define( 'AUTH_KEY',         '932yk(:BFK4r,ow.nlNkzypau?wJB]t!^ dv|69=1BLl|x>hTUlaJitm_Q~+(/VQ' );
define( 'SECURE_AUTH_KEY',  'BAA)}$?u`uLOG(RCI]xA0mznnhQ#6$PuD8)(*JISKPa~<1QKuHf]_sVb,[4e`MyP' );
define( 'LOGGED_IN_KEY',    'zS!N|kd)gf6=j31eQ^&;MeTzun{VJLzy66#!Pqy@3,kzP(SV3Kjh<0m9{Lb;lzjp' );
define( 'NONCE_KEY',        '0]_o=x`*[fwGa|E6bq%9hwn.Y7Al#/si$=#?PuF}@M$;|F#cw0zc,3RGiT~C(3UX' );
define( 'AUTH_SALT',        'Yx7j~XH(@wW!Z2UH2!i/y3K~j7qfz&F|2d_AD&9g7hUA<,<K?jl*,B+0C<;+0V1b' );
define( 'SECURE_AUTH_SALT', 'Z]MX+1KBw6XD_.7-FZx4D)0lyz$TR[sZ>vetK9$dX;Yl`>Z#R4:66h|EVCO.WTFw' );
define( 'LOGGED_IN_SALT',   'm- (8Ry,w1 l0rahXwTAB~bD=eH%{$g]zeh&/5Dv`ABj&8fPz[;q_J3 a:.85>G=' );
define( 'NONCE_SALT',       '])z]_*tHIR3RFp2`(8#[UJd&:ryzX^L|+8.>tFZ|C5mc5h9PlP$+N^c>`WG+ZV;]' );

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
