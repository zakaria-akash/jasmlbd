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
define( 'DB_NAME', 'jasmlbd_db' );

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
define( 'AUTH_KEY',         '6O!h$Ni=EE.o)}z2RxMk6,B(dtwIWO5|fWh9%N*pHv%61<)?WYvzq%2T~YyKKo%q' );
define( 'SECURE_AUTH_KEY',  'CxL[^MYbKPr]u]^mNS|q,]VQ[S}/@LV~I}`CA/V&cN?!?wGXaX!?T|o&eu>8Thz$' );
define( 'LOGGED_IN_KEY',    'K%SjoZyxvO;$Uoiv8/cIMob{Ca%K!?dli-WFX[7mq$-_?Ut}i`NSRHw-,-:V#v(U' );
define( 'NONCE_KEY',        'o!c3Ww+oGh`rG&E}T-0|B!%3M@a6NL4W(geTX52l2AwqbT-%p(RRCRr>9`gCQPz=' );
define( 'AUTH_SALT',        '>,r)v[9l>4WjjNyNk_++p+.ez!YaeZ&s={aTEC7y]E_@+poJwPugAm2&bkW1Qw5;' );
define( 'SECURE_AUTH_SALT', '[</2hzq)bywkBE$7p(F>qlh?yNYS]R.Cp-EN3]D+#1hYgw@W/8q9[?C3i4H{ht5-' );
define( 'LOGGED_IN_SALT',   'QP1[ mNnItKhD%q)!Bp/;$8oW/|hX)ygvH8!QM#GM{ws>t/OhLbk]i_XPMK-0ZI#' );
define( 'NONCE_SALT',       'M,bH^-C]~&$qjj2vXI^Yeaw^,>y+<MKy?GH|m8*74I;I!u6LG+Djx<^ET=p~`;?g' );

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
