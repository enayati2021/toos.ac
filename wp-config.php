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
define( 'DB_NAME', 'toos-ac' );

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
define( 'AUTH_KEY',         'wlYMDwR~;WqA~xpjm Mu?mYGA,89PV> WNPP|ewUr;;aYp6SaUcR{7}qP6GQ2mJF' );
define( 'SECURE_AUTH_KEY',  'Z|0$w!Gc$C*vBqxs4<tWv5zi,1./&Z)dt5TzmLtw2n/qQi!lka7`hvLXci2wZ$w0' );
define( 'LOGGED_IN_KEY',    'cRmA)wH{T|C9_y(VIE.%3rjs]YeB_/}Br5j}lntV0B1E@]YL5+5z{+t1B:#zOJMM' );
define( 'NONCE_KEY',        '.dM5/4RA$MK~9E~}l9^4gIs _7O6;]5os#PdZYwffk;/5xX^VwBJ?!uRmAIA|nbE' );
define( 'AUTH_SALT',        'YrHoUxV{,mwZZaRbH{t=YN;Jya3$d#hd6btyMaN~?@Uu] y,4G7:V#yBN9eRR&rr' );
define( 'SECURE_AUTH_SALT', '/TO#y2YL`h*UJ 0E@g~-Zc&}fV.,3$:_RWHi_K@S~7Xg8C?,tW%*~.N7JINDcWSJ' );
define( 'LOGGED_IN_SALT',   'rbQ8~FloCjLIRoM[h1rWzcA~+X=.}wZ/vdLhz{3j9T8bEl0Z.-O(cCfteM2fDm@O' );
define( 'NONCE_SALT',       'G~8+G2cC& M2L]G)Hb6{dBP&&34V7CWYe~dGxK9.2HA%e7vAE)~U.`eP$h8zSmx`' );

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
