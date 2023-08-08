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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '!l1X7Yevo#qHOR#VWyt.z$:Jrr-.Jta2|mG+qmI$PQ<H63K |0>os|h9>dG{7x(E');
define('SECURE_AUTH_KEY',  'iZJ!<JM)~8yj v|dQ<P@f%oO&:yEF;<w;PmVb=>d}L[kT%y; M&lNBF&_6/JD8f ');
define('LOGGED_IN_KEY',    'k$rQnx=~rU^fT>xLdspqF7!N=ofua[<`Hi/fUF{Jf>id5=-4@D}{gR^pI}W|k7<0');
define('NONCE_KEY',        ']_M]7o#WEoF(a@SS4IA?KHr_)WGB| 6+^v-ocXl#z4&-4zp,u 4OJ(2K/@TM<-j|');
define('AUTH_SALT',        'xwRP>3LhuT%/Yb0Kf<8?rbHiw?`^v~*C8VWrTiD-T,(L*%+3j[Quh 5S%U4iS/bV');
define('SECURE_AUTH_SALT', '.8%u()u6^t(g9A7#:DDC|=d]6=)Sh0$mNf)5%z*G{sJa2rsBsgv>>w2PR4/Pcj G');
define('LOGGED_IN_SALT',   'RkJN4gd[{N6r1JDs2^7z*|=svweW4I(zvF&n+qszK_O4#W67TVIAlK+8^vEO1cTz');
define('NONCE_SALT',       'zCj^#|L?~8-chrRPyh9cm`iTrZzddv$!,|k@w3#/$Id4m:qsMC6{|0n&1[<v~X(f');

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
