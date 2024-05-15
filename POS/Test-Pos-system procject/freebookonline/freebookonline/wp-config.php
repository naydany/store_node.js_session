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
define( 'DB_NAME', 'freebookonline' );

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
define( 'AUTH_KEY',         '`o%Kd8I!4Ldw[rUqsfI*d/E6g-:n1zra`-8U8Wl:Yet5;d+th@(gPZ@c%zCC%xE?' );
define( 'SECURE_AUTH_KEY',  '{,2 2]<j)C^p+R5ge{[}m-9-z#Y-YOr6rb?=Ewb$$d$ V1`&n%)PK!mr~+D1t-U/' );
define( 'LOGGED_IN_KEY',    '}]2ZCLOYQ(H1XA$J(i`Pom((Hw>rTigO{o#yd*cdu-<]Wqvtw;yenI_;q(+r:s%V' );
define( 'NONCE_KEY',        'h!_9Eu$_.7?B<Q%j-Qol!iVA0&7dM=W;Q^-aa3NfF_e1hjK5*_.FpJX`K vrj5^B' );
define( 'AUTH_SALT',        'Gx,P1;wGORPKR8SDwRU4W!tRxCGirh][dSLP>AA.W;FSuZ(mH4QzfIDB;rARZCmE' );
define( 'SECURE_AUTH_SALT', ':4gsbqE;{1Lg|b4{8qJWkhKgv^K/ix9O&{r,G&|REr4z2?U{pbOi.W3yNbm)I!y7' );
define( 'LOGGED_IN_SALT',   '_1(YTHJW2^M8b+|@y]si&T<$rn9f+`7.+cg$?9JH.92:J_?x,: &Z90N8f|=gK[:' );
define( 'NONCE_SALT',       'O~pU-!+LX%iQT9Ps2!,nT4wed&2N[$j{3Z K.cFg]xjoh<=&)e BX>#Y_yAMox}E' );

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
