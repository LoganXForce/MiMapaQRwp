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
define( 'DB_NAME', 'GlobalStreet' );

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
define( 'AUTH_KEY',         '4GpVNhHa?Z>Hj?#A{>, :N4D!Ao&Y%V6}bkmw>Euv8.^{iS9:O>)IS=A}0{27oto' );
define( 'SECURE_AUTH_KEY',  'dXm]q:Xb4j5<NM:_=urh@Kn4s-6xFB/PV&1(L-&L2-cJ5aZ6 c-6FcK8b,IK54qQ' );
define( 'LOGGED_IN_KEY',    'T=_&01ag7xdL|pAvjBO GQIt45P`=)7D>..Tc@qVf7`C3O_p/^u>*N-H9^A6y3Mp' );
define( 'NONCE_KEY',        'a?HcVAh)FfjGSRK:flqX#(sC1BW}C$[8|z:T|?*Q-g9m1yg2I-+]Z5MwV+5FD8t#' );
define( 'AUTH_SALT',        'hr>TCIeESfh~1L ,w;N5*U^71=Churtb!lgH1!9j9eg)4(Bg/<sUd_GxMu[7N)OS' );
define( 'SECURE_AUTH_SALT', 'Wt6!4ziJrlER:kuj*Z*aYu%[:2Rz)Sl M/WPJ(3}8,Og7Kg)Fp%rBa:CfBzGLFGq' );
define( 'LOGGED_IN_SALT',   '3;f8eiW}VWg$&h2Li6~Kk}z~B3^SKxWlgZO79-d;NhEe-+^qpGQO]xUcWz-`l)3P' );
define( 'NONCE_SALT',       '%UuS#k`BUI5Buy^0/)CS[eQ]*!@XOhQ6Xg6p:P|5#:Is/<u_]}U1!7-$MAvsVK53' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
