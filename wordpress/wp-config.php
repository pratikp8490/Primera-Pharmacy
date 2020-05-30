<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'AUTH_KEY',         'X1SrBh6|-eKXsjQhB3P,yU;J96JuJ9bxR{2@|v-k*PPjw#An)7t~fOQ+}![2+_IE' );
define( 'SECURE_AUTH_KEY',  'Pu5o2RxDvXhi.2YW@,,C*q9&k`;f<B:_^0DmR/3nTP`VIFN(9nG[+;m200AIyh<q' );
define( 'LOGGED_IN_KEY',    'o[TOdI3RG817x{S//xJW_ZtLnWt}Ow8T=YLRA)|Fx~J!)zPFC2A]7lzCgMIf90!z' );
define( 'NONCE_KEY',        '=*z5MSWmUM7r8int~UN+%nfq)lK]/>,4+I7r(-jt(}K-**`v,BFslWOqL}ryffj@' );
define( 'AUTH_SALT',        'POCoO7rZJ!/~F,fuQ6f#MT0LKa4Uu=p`cR}BURWQr28q_YFV[g-|mpus~+9{fj8G' );
define( 'SECURE_AUTH_SALT', '6X3Fjw(J@%j,v[$/}=NU:!ZEs+VTfbL92bBUvQfO@-qE]cgd5W!Ju<}se ` 83UH' );
define( 'LOGGED_IN_SALT',   '><vxpUpysw|DFTOvHkIEu.=QQsZJ!=NB$xlZ|N1E>O&Uh+3=DZntCKSQ*)vJ^B9T' );
define( 'NONCE_SALT',       '90w_0JETE5$ `okK,rB>_gS?kR3qZ++/rgv2_BL;z%;oy[+mEReQ@fqI;bwRZG;$' );

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
