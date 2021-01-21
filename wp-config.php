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
define( 'DB_NAME', 'ncrimat_xlworks' );

/** MySQL database username */
define( 'DB_USER', 'cristian_crimat_xlworks' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bfX7z4&5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Hw.pque%P5w<rs6J>a:qk2oN*l[]h;lRAqy `>[qWTq!Gp0#/vB+Nc? QMdlep*7');
define('SECURE_AUTH_KEY',  'z)[F`S@L^[>/d+H2y0]?{-Oaso}0JtpgG@Bn||8w9R;Mrd|Iz#x_p/hd|oZ;f$Fb');
define('LOGGED_IN_KEY',    '^L?$}1FNVAxosjbRBq[twfT,Io5N^)(B=4UHAl(``iy?[TpjF9?_ip/~S<j.X)IM');
define('NONCE_KEY',        'Qz2;+fp$B?cx/@$(*,+$VuQ`ZdN+d`db(xA%Hn2rV6,[g.8c0%=^4-qe=Y?wwNf+');
define('AUTH_SALT',        'OBDNqYdTCL(C<<(:ppRHD|!$t@hIbl1E}CGN+/)A%41a-/3KV;>;w5{LE#q-tyn3');
define('SECURE_AUTH_SALT', '^N?ix+/*;V^p1dQ%C;*R6}-F4|,`[oF+:)D0>jFvb4xkGE~p*I>Dn|mAGrg{7TcL');
define('LOGGED_IN_SALT',   '5-n,Haq&!15l{1J--EVZ3~_s6rkc#!-_|#6r7ah-FtZB|svPTW{Sj-H9N)+K9$~Z');
define('NONCE_SALT',       '^lb2[-=/]R,-`8]s.Z<U5co/rsa{OX+9OD|l@CH{b+NFC:m pRhJ1kOE|M?HRAs)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nc_';

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
