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
define( 'DB_NAME', 'rms_1' );

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
define( 'AUTH_KEY',         '+IgqZPrP3,2!cnOR~n$VzPVzQv:-,nP+;?1f?{u.GX2^}t.rbAV[J524zYD=YvNB' );
define( 'SECURE_AUTH_KEY',  'Ojo_DC*^{k*tKcF=$4d/s{5#T~)WY*!&dX]dgIl)~*iA#.NIQ9TV[-e@ 7reVELX' );
define( 'LOGGED_IN_KEY',    'h_fb=:aG`1Sn^FBRNGt!usO,OPUJ&-0 }b 1IRUI<ekW&/u7iwYCxof+Qd`iI=k<' );
define( 'NONCE_KEY',        'IC%s-TXMBw)pT]Cgu9}GrE.Q@5ZwUS?EqRJXKZ=kf[b{@q.82sWwKYtvd0nrTNfV' );
define( 'AUTH_SALT',        'k7#Ka]@~-1PRBnD&zrNb!20GKe?!]y&8/ &&<sk*F-bYC?Cs_dW}c{3So4}[),!S' );
define( 'SECURE_AUTH_SALT', '2?[z3Kq]PGg6+dk>F7)CSgA?l]>b=m;S/;?-r!/_9IlZ|3vZXW!I=4y2|_p(Btgb' );
define( 'LOGGED_IN_SALT',   '$^u$4;6oLngthm-k6h/v;_;[mqv2B(;5}N8Rz{cNl<RsT+6Ztn&<~wZ?&ayjA!:,' );
define( 'NONCE_SALT',       '@w]s}h5_[t^<S5~}J)UT_5E{Q>bBL,zc6qx9;+RLv&g4$1.hZ0|Ngwr{QOg%kmN,' );

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
