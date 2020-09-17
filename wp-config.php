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
define( 'DB_NAME', 'brandshop' );

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
define( 'AUTH_KEY',         '4ITx(]_f1L{5n:cr<66 }YJCw][j.(jpt*pOTLZ+k-NK-X#1K:nH<R0s={dBVzn-' );
define( 'SECURE_AUTH_KEY',  '`2:={/wc>C1rA;>YJZ{xvf{Ae(2%zOe|aN$+;v69=[^:$iP~LL<*h2`c-v0-eA02' );
define( 'LOGGED_IN_KEY',    '1AS!44/<sYl*_X1;+;=8nm#6BQlj|:@^!07P`O9zt%!j!%LTPkdesga~}N6/iSw&' );
define( 'NONCE_KEY',        'b|=&raMM?hV*a.QD8L*&5r|9d`K!jBVLV3A_Bv`9.MO.Q:f3u<TzINSb+LE#Qm&k' );
define( 'AUTH_SALT',        '$iAE=)Dq@l*R)]~M)-X5F{h#t72br$jB$(K*gB7]cstn&%O84`+s}NbY7SpZ8AMG' );
define( 'SECURE_AUTH_SALT', 'E*3wQ+(@yUEnQOGS,C9&K:77*se2gVG`Qm8GbN%,S{,)~$&zNtf<Ks%9(TjHG*#H' );
define( 'LOGGED_IN_SALT',   'WPl(|BT55f.z$cRHYA>rv:+~}$@y1dSWA 90T/<i}p5B^cxH s*%n~%?wR?LQ FU' );
define( 'NONCE_SALT',       'cdcD>w,&9nY=BZulFfCa+ 7Ax0w*;H[Z54G+nmSaMz7g^L::{.$ZST`F*d+myX<2' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
