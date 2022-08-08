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
define( 'DB_NAME', 'salemdata' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3360' );

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
define( 'AUTH_KEY',         'w<U-5yn|16 ,*=rw`HwR@s3xk%j;-}<1r^G{,$JX%D-X;;[NsN%n;+K4q|BXw%>Y' );
define( 'SECURE_AUTH_KEY',  'm}c(IOAD?$wS4jk:.d1xnFj9o%wc+FgX$RKY9c}l[gchrW2t62zG]m7)8GJn4qdg' );
define( 'LOGGED_IN_KEY',    'eEwT.d?#!DK+{XS%-J[=?yeX)A@8}O10(-nh#lB[:-Ratkjy4PRwY8}?]BF02Z_:' );
define( 'NONCE_KEY',        'W/c.t9lu[]$SI24W/9Kt9:p&k~5<Nv3DA~kQ&L;Cf@~2w:fH<: r@]kB~t2k2S(E' );
define( 'AUTH_SALT',        'K!s:^HIg/Izok6Ge_)@*VMmq;f*5Ub@o-dqP_2P=e;b&I*oX?otKG,c,rmbn+Er+' );
define( 'SECURE_AUTH_SALT', 'fN@cn?ZDRPsiQ*Lf;Xo(kEQNfkK_?A3.?Sje#.a?xE=p<l4J@D$yMNJtBy0HT`UB' );
define( 'LOGGED_IN_SALT',   'ZtGGlm^/BU@^5|6-P)vu?wlT}uI<TH,Z,oR$Hd;>6t4kT5cpV|s}9m8N$3TJ)/4Q' );
define( 'NONCE_SALT',       'JtZ]a${_H*)?5$Wy>P#A2/b+%= h7LwjT/1;8A}fC>{>2,9pp.Ag%1$krm,6()|8' );

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
