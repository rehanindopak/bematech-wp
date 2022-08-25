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
define( 'DB_NAME', 'wordpress_bematech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hXhS#Sbv*wHPt5|slF4FxoV`^Ox{^i1*XH?9Op3VAO(qvieM12@Ufq):+2,$~fGa' );
define( 'SECURE_AUTH_KEY',  '9/{KeFONL6IyS>}JFyf9Tw#gg%SK2Ot=t0w=i}#pZorP5h8BIj~Iv?R)rB4b]aBU' );
define( 'LOGGED_IN_KEY',    'jr(uGH?wdS>gMuk[*=Z|;^U=f^QZxm;*wLOtOi4lXmMD&U*L_8GU38m$jFrGmtLK' );
define( 'NONCE_KEY',        'yHK91%Ed2H&D/Qj]LHqmpr$2#gn*>zxIG~%P+gW6$h4%.j~U1f>W/n}!jfZ@AQ;(' );
define( 'AUTH_SALT',        'sTl3TDXlHc|t`N,.y~Jo|x^aa!Gz(MRJ;Pwklk?[xO5xbfu*8pu=eu53?wirAo>E' );
define( 'SECURE_AUTH_SALT', '0t`T9jel,hy2Gf;yOg#K@Q5}K#a#v|8Y)C}3K_81ldIkE,4CN>;b]TVDVp&0OqX4' );
define( 'LOGGED_IN_SALT',   'd4Y<Up5!5;/5s4+p/h#28V0[X/|=g1&AKo?9?YYg^{wHVStq>f8VM,c_A3klEUun' );
define( 'NONCE_SALT',       'mz=|12}Do2oXD~MoH84`[WQD46!p,(11QJrQcKS#8vhxoGv$<!JM62~51s%}fA1D' );

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
