<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_blogpersonal' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '@Ditto0NM3' );

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
define( 'AUTH_KEY',         'KcEo5xcC+5MX6iAbVm>! h_br=lI{QU(WjA$6.&>#UEeg<oH|+fc.C1Xx-9 {`2e' );
define( 'SECURE_AUTH_KEY',  '/rLAhll+AXdjs1D0?dcu.|F70fqYnXes31:<5D0bbX&-Ga_K~yJ66[{3pRKreOYY' );
define( 'LOGGED_IN_KEY',    'bOBW&;K?M{I$.XO%MQ*oX1`_~PCJ6Ra`( U~;;p{3^lk4}(`jDE0xC1)c~UYg{(k' );
define( 'NONCE_KEY',        'Etc{V@QBKY+^?I ^aN~Dr>7 NT$t/yJ6*_g<|aQB<<z]R197WOT5q{CZm-d8<RSV' );
define( 'AUTH_SALT',        '+gv:xKu3GW*,{Acf.:<i[BGHn(p9m;H6>rl~qQ]rVgC]g8&[7~kyL;^NYOP(?{eb' );
define( 'SECURE_AUTH_SALT', '#YnQvP74sY>:=.h)tN}VQ.}^J5IlelrGr}mb|&(7@oti=q0aoNoAXO^3bT{}33!y' );
define( 'LOGGED_IN_SALT',   'l#{+L,wv_l1).(y&[2).0S+ TqG3qZ.CO<gNB+>%<H5*0$.t!u~_:Op8c_F<}H(Z' );
define( 'NONCE_SALT',       'l$bcG/h_(JKlY--gVKN|J7< kJ m6i{<6mtU6#N[`VN:Jldb6ez:-?PhW@psg9`]' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
