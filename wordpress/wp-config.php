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
define( 'DB_NAME', 'pharmacy' );

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
define( 'AUTH_KEY',         'Z:[5>fVmoFVnfHF5/-.X`<`)@8A4Aeo?Do5m?eIU!0j.;REm{TPC2YgD&OwN&W`r' );
define( 'SECURE_AUTH_KEY',  '@Vk?Ky<EUbHXDOnG>KL8@[9*L2jkaDM+D$%a|-EG=S`uOa79|i,|G%NQ{Tdh+5h3' );
define( 'LOGGED_IN_KEY',    'Kh$H@zM=Nq6~FYLDquA}VK*U7&_9Keud&p`+EN3Wy(G.A_!m~a(i#yVrmsV(JkZO' );
define( 'NONCE_KEY',        '-aJuTLZl-g>%$$pqKUcp+N>0MA/DpZ13M+dF(TY;w+P@CW.Ulk, ~k#w9:eGgKyk' );
define( 'AUTH_SALT',        'Mb0OK c*SI!I2,g2-I^`1ewth9Mg^%(K8:X#Iiy:DRG%59IBRAF*oC*pM|,n;i?%' );
define( 'SECURE_AUTH_SALT', 'a:Vn|3rdq8Kq1o;^GR`*+]sn74-;sF(jhXbh%x: O]34j:hnTgb(#Yv~yIT>8n>$' );
define( 'LOGGED_IN_SALT',   'XJtuGWm1NAz@ud;:2pJ-o^C!0k4 #`Uhm7C/x|pC=ZC$~TSw*N2oBAZ+=h/[hi$W' );
define( 'NONCE_SALT',       'B/WjCNUVRIKh?),Kq&:<a!Fi-K%s~gv@bvd5LB=D}k TuieR$tunaE&dfafl_Jg9' );

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
