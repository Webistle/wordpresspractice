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
define( 'DB_NAME', 'practicewp_wp' );

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
define( 'AUTH_KEY',         'd04M {_b6wh.+(1<sOKnjI55pP).-Xq3N:Rj/~MgQ$7P@_[ysly8cj~+yU9CBTAH' );
define( 'SECURE_AUTH_KEY',  'Q}Y7FSk(jN!dzHt^Pm#8@^p/}0sZQmM;[@[<~o|yvwjR.o7Kkb@jRCPK@uIklu:f' );
define( 'LOGGED_IN_KEY',    '^KDHeNY2V%`9mVvOnOzblDa{$i*VSj1v}k>0mR.1);=6)]2Sbn$s}m?:Fx6i8pu{' );
define( 'NONCE_KEY',        '5q5$ ZGNWV+:ri@]!P1]^364d|U>/iky@GKqVZ<7WX)fBUGNR#IyAx2QY[W=,3eL' );
define( 'AUTH_SALT',        'T8s+e9_<AYdsQvb;B)P<a[bKs6IW:A={n6)a!G~p)nJA`W80SFV32Inl;rEF]79w' );
define( 'SECURE_AUTH_SALT', '#[9H!cFE-%SHJyI f$j;%Vy}aMY)uVbr[w;edx;_3)eATZ50aGl-rp(Jue30ztiv' );
define( 'LOGGED_IN_SALT',   'w[_WN{uBPl@M-ID:{x$wrthy*sRIuCtEXK_6Xo$3DZej9;/bYS4|d <KmZ-TfU,P' );
define( 'NONCE_SALT',       '|q|%8I@5 W%CiTk8iR3Nn ->1]cyHaIy[Ka`AncI4C}.4{_iHap?tgS~Bgf?[u>5' );

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

define('FS_METHOD','direct');
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
