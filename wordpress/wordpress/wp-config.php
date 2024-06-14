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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sun-design' );

/** Database username */
define( 'DB_USER', 'sun-design' );

/** Database password */
define( 'DB_PASSWORD', 'sun-design' );

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
define( 'AUTH_KEY',         '9G8[9[_,hHHt,Dv?5Bvoq4wo_qq,*Z$}Qh^!(-hk7MvqG8[oK?Nd^>T$>gGDQdNX' );
define( 'SECURE_AUTH_KEY',  'U6h{7($YR-B3^!VxxMofGXi0O#e9p-?nPG/Oje}YZ%[={(5O_@jYZ})TzkmWd}vh' );
define( 'LOGGED_IN_KEY',    '_R5MYe}ZnL|?&]UA^f&rLw/70B0g=O0k>gL8Lm1ninmE1tPYv~OIJtx#P4tlL9dV' );
define( 'NONCE_KEY',        '.&K%s/mc?5mn]RJRni& t|Bz[f`O<81h5PO!kJ7b~=dSt+*Uj,n!54UBKI>y>8CO' );
define( 'AUTH_SALT',        'pt3I~1ICv(;XbVETzdz`flVJ#_!s2gvH+y42(Q>=B$Z_Wfz8]iW1M?Z;rw=Pj2Q=' );
define( 'SECURE_AUTH_SALT', 'L`A8u()N]yp MGz/IFO.F/7un;[U6SN]fhai=m^D=lZ[MK:]Jp#.m$7R1pn$E)p;' );
define( 'LOGGED_IN_SALT',   ',g#6g#2D6*[f8J![c;s_yh:z9a#ub1>)^ik^$o.Pr;cL`Zi#;CTQnokOKC53a@B#' );
define( 'NONCE_SALT',       'EfQ=w_ocmHwl@{fhB-x8>a8jNAf:.qhz>^r7Gc?ke?Bx-sDiI.M~U?rA nza(]YC' );

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
