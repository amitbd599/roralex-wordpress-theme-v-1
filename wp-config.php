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
define( 'DB_NAME', 'roralex-db' );

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
define( 'AUTH_KEY',         'K]&4*T+}RB2NvB.E :<~o*;(_yz.nht0a$0>!2d_IYCElEj2)tu*xl V(e:|BDaP' );
define( 'SECURE_AUTH_KEY',  '6Oasf9h$lbz1:&c(!|FSwFV^2{pz9y{{Jg@3Us1T0h< ,R^!b`+qJI?iRQYY-js)' );
define( 'LOGGED_IN_KEY',    'oKQ-EkUopVfya(njbv^NN5dl~2U_o0,N$*3>Ps]w%WDH@U`$ClkqnSv4<D#f?>pH' );
define( 'NONCE_KEY',        '=71^22Sl:KtsG?)5Z7^53*WZmwLH0]zbRphtjx#`f%XsjA!A8,uO(b>E&_%0h[f|' );
define( 'AUTH_SALT',        'bO_$l{k.E>}R_jM8i0|gnD%WpVm~>azq$n4m9u!k.p8#udGjx}bF7]xA%PYw32J`' );
define( 'SECURE_AUTH_SALT', '_NmP/ho1*4Q_I6lc#EXXW~_oKCw$]/Em/)?VaB-AgE|^JSCZB)yf4aEgXZ Gn&}d' );
define( 'LOGGED_IN_SALT',   'TXO3Q9FUC!kDNW[hidN%uK96XgDjLneaV^wtI8Z&$=S/=SV7{>SI<?b_ 75+u_!,' );
define( 'NONCE_SALT',       '@C=(LU&p%p+h-74i:1n4j2L;%5E`:0tB[d+S_4t%^Ibr!;A(qTd%=FdT+i;&*7Gl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_5';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
