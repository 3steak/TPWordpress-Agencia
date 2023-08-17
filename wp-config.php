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
define( 'DB_NAME', 'agencia' );

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
define( 'AUTH_KEY',         '8tul0)UsQg;&99}q8cfuKYlRrZ[7)/yg<[Xn,MNj&x[^Ff1G UF^*R+tdj;ENb%B' );
define( 'SECURE_AUTH_KEY',  '[BKBwT|dTq@.(u+v0CYBr4hA{;^05~s,9[*[3 oZ3ZR{$DjWe6Sz1|TVSbIcT1l7' );
define( 'LOGGED_IN_KEY',    ';0]y~7$sZ#8oP,HsR~K1)-(:TAB5o5ojabuX$~RU,Upa`=Iko]i=IZ/M_dETLnrm' );
define( 'NONCE_KEY',        ';w29(<-LStjmm9kh<.R9rs,~1)Ktt/RB0O](CIhPJRbuBM/&905kT!^_t`s9wwde' );
define( 'AUTH_SALT',        'u6A*Q;?uwC0&}9<&5[.&[s$Cw~|5CX}~f%#6PoKS?x|0zO+S8+VF.$v@r-r:hrsz' );
define( 'SECURE_AUTH_SALT', ' #w!%7WqzH(19:[QCp1hzWC#v%<Mn[)xX]T^hB2.q-hPo37z{7wG4c-W_n+Xe)Nx' );
define( 'LOGGED_IN_SALT',   '#iiSjrOJ6j>;M3m:vDIB~E6h,^R^^pL4kk*^lH%N?-tApP:|bXfhb;(K=uQyP|[G' );
define( 'NONCE_SALT',       ':uVKNpou@0NS><&9#I~lKU^(]nUB;0nBBKDxgEgFb 5e~/N%}!beT;99?o%5khjG' );

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
