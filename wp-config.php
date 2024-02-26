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
define('DB_NAME', 'id21915081_fans_site');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'l0:z+qu)nh*-rVeGx1&}r!P~b/97HWT1J(`;H06e3.eG_$<HuVD|$K49{Zuq5u&r');
define('SECURE_AUTH_KEY', 'w2z47Ovk|z_kZ`yBfvneAjs(@XLBs+C@RhZuc&[hO}*7[Bt{KY^wj=#f~/pZj3BQ');
define('LOGGED_IN_KEY', '.~(`?:5/C2f;8>BD.kP+?Euu(U$<SLtbjAFMH%e&rCijr sYU{sJD|tXkC^.4Eps');
define('NONCE_KEY', 'Vt%&8v]RNoZe<mFA1>T$~H_<s-sp+=&ur^MMX*&KD$Lg!a`9oca_!u1!=ro XB&H');
define('AUTH_SALT', 'XSR/_fnfg>!TV`zN+L[uk{ki3T~[sKC95a>J/*k{S=I:Q4sDQA5-zXuHBX/sV4ca');
define('SECURE_AUTH_SALT', '. &,Prs)*zw&<sdsfxuMs[nvPreYa(:2 (~0g.4~I.ouH0Z-*tiSug*-]%G[oi/&');
define('LOGGED_IN_SALT', '{^!x@?@T65c3#TpSved6oh7lWU~ZZ1/XnkZ@ZK1(<2Wm2S<7U$tGKjw[xYx;79Hr');
define('NONCE_SALT', 'I7[qJmiX<Z;i3?pS]eoY5h:^lKfpa#m.5:3kGSlkXn}].q];A@JNzW^*V=0xm=_Q');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
