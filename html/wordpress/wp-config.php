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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'my-secret-pw' );

/** Database hostname */
define( 'DB_HOST', '106.52.36.65' );

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
define( 'AUTH_KEY',         '..9L^!;YR{p(TAO =>[BRc(m5!jT_LI|AZqqyN4mje0W]%:NqGjUoNWXBRR4=h1D' );
define( 'SECURE_AUTH_KEY',  '}zrE<!11sJg7>g+3bFlEbw-RX_[Szek0hUann+mO<ae${uCXKwDW3`3#an;,2sxf' );
define( 'LOGGED_IN_KEY',    '3YtxE/_?B#9=NPI|%}@/6Jp%k!RI9@Lj!3?r*q@N&;ba<vx=A&L43#Kq[)+i&$qV' );
define( 'NONCE_KEY',        '9:oP<8;Je.^Pq5R%Pkw^DHZT2umVs3dMoFcF8yDbdxXmTTUTXJg1[wVB{P=wiMJV' );
define( 'AUTH_SALT',        'uoh&]Y124~n2Sr6c,s]}PSP&FvaKC0Bn{Vt5eeUVtz6L_BE.T8CB|*1y.vP$4D>/' );
define( 'SECURE_AUTH_SALT', ')KbJ5n.X]YQ{,` |d*|p5[&HYI*=Mo{I]zn[UB_,=:*( w!0~RfZ;k5{|c=RNcVa' );
define( 'LOGGED_IN_SALT',   'bpu9+ko#IvK--J[?$V_5i54JjQ;Drn8?8-b`8qWJSLUe7A,a:b2o{9j`,V}c6`rW' );
define( 'NONCE_SALT',       '-VWY9b2$Dm+t&<VreE5TteD*I8L i1%(a.J%oOg6 GoIJJoe?[VGk_2~5UUw|_4r' );

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

