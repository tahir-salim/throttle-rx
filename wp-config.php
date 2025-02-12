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
define( 'DB_NAME', 'throttle-rx' );

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
define( 'AUTH_KEY',         ']Wq6!eK2ggG=(FEU.~p:^_q`2#{z,1``b`Zm3p.0C?>,WlBsa:yPB?G4,j@6-_wc' );
define( 'SECURE_AUTH_KEY',  'x_x<$7d(QSh@;`Lw!!iP}H0*86& O?.=`oKq|W{GYS=gi% 1yFfQuP4C=NZaE/;_' );
define( 'LOGGED_IN_KEY',    'F/AsYKR<zuArto$+1biv=Ld!/{e`YxYS,MT)oyGMApO[raI{@| x@.p{!!+9ulmm' );
define( 'NONCE_KEY',        'B8+Nn^6Rh7$/;amROZTch3~+X_lr#ag(x0%*qJdhFY(dH(n^F!QcP-%c=NtfB9oG' );
define( 'AUTH_SALT',        ',;99V>Oo.4Qov#`N-A`ZOH]5b6-<5H)Z=H6&eo.k3OzA=g_EMu? PA!1f(S(v0WH' );
define( 'SECURE_AUTH_SALT', 'eM$YUl#py* 1Y3sl[U_+X1xmCjyd$/(kZAJ 23iD#AozulITmu$&})A6:8I98Gz*' );
define( 'LOGGED_IN_SALT',   '*pwywLCr&_e~Rb,b]Zj=^TAopk>n.%bG0/WNy)m&x63%a-8VTOVUX` =0uAnEXy6' );
define( 'NONCE_SALT',       'IH:j.%47T@cTo(84D[_1$77F+l;K[A*:y/Mz2>(o|54d5S+5C<Y&xx^;JVA#; tm' );

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
