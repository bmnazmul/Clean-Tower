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
define( 'DB_NAME', 'Clean-Tower' );

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
define( 'AUTH_KEY',         'E@t?;%~[YW=v}vn#N+v_VAT_INODG>@`X>2%6!:!(jVrJ})pF9p2FQpBC93a%Ew4' );
define( 'SECURE_AUTH_KEY',  '(^6$Q8}T/%p9%rA}duui7ef4zql`5B(JkO0.}pzxe)Ec+y,6sC5pEUQXnXuSH}Q ' );
define( 'LOGGED_IN_KEY',    'n%r!QYkU66W(@#k97>cPReu)]Sf8HbaQpwvfP(QuusR4t?J_la(klt7)E(sMpa*E' );
define( 'NONCE_KEY',        '*O+7h6Qb$uK@Vo0?w=yWJ4T9cncNa074P)%l-%Tv1xG=f C?9j$[mzd`l6TK/NZ&' );
define( 'AUTH_SALT',        '$zoLd7Fs*LIN&Wlh@X0:LVy)f4g+S`=E-Bos!O,NII)D) >@IlG?qK)s;Cw1velb' );
define( 'SECURE_AUTH_SALT', 'w/GHQWeZIXIJ>j)=5xaX*pDe3M0_x/>N]J&UtEw[BQs@R!1j$hVe3NTjm.~q=ul~' );
define( 'LOGGED_IN_SALT',   't&Uh#5h7I8%O7;ejl*O}0+)5:#Phik`D#:/S`!Ne(|1oVL:-!-Q:ey5c,BJ0m_/i' );
define( 'NONCE_SALT',       ':5& VU#rZ_.@#@.^_q2~6@A - z-a~Us6QTo;@mYd4}>#dCyYQX8{_H<%:=.`%p{' );

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
