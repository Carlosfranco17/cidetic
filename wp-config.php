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
define( 'DB_NAME', 'cideticbd' );

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
define( 'AUTH_KEY',         'v2s;9a?q=k=7rj/Y?X,k>OZM}fOqL<b40&cC&R6Ygnn:{inJ>f&2AsDiNqz?Mza!' );
define( 'SECURE_AUTH_KEY',  'NQQ21 Y`+u(o^4>|N/|I1x;sFdQ*|k6(GJ_h zgI6-,WNK%:Gkv?wJWuUl<EbU[f' );
define( 'LOGGED_IN_KEY',    'J%.W((jQRey :1%&vh[)K[KAsBOF9U3XcE%QUwTZ{W3|i2g+8EeLV%aesxQUklo{' );
define( 'NONCE_KEY',        'Md_OzQ<3?]?yLVm#!5: n/nl _%|-z;C.I54P`K[2[>PF9gqb8Kbfeh|Jzp1_:]@' );
define( 'AUTH_SALT',        'sLJ#/r+djxH+*q:(j/+#$ET?%kej4Q97 /Fg)y68R=D+,L,1b872FW%`tRFaJVXG' );
define( 'SECURE_AUTH_SALT', 'SnFzi.7z<1 @}!LPVZ1hZ{Bcu[V.QZ_- pEv`Trb1HIXIdj?]HC3E%o}6r<c_FKs' );
define( 'LOGGED_IN_SALT',   'N!O<uvQ+aRb;{%k{ZArQYcF_F^[:: _GgLmx#WS,qKuVGWu]}q_f!iG2<rQ(7d@-' );
define( 'NONCE_SALT',       'Olyu8EVAgqY FI_KdX&BOgF)}-}dSzqX=8tZD}O%4>?bQ; D|Syw:`b}lLK#K0G<' );

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
