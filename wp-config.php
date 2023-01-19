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
define( 'DB_NAME', 'mandeinnaturaldb' );

/** Database username */
define( 'DB_USER', 'mandeinnaturaldb' );

/** Database password */
define( 'DB_PASSWORD', 'Kmu57vic#' );

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
define( 'AUTH_KEY',         'wxPo4Zl72TG lR?`4i7&J]DT0:&mg&0(SH1D[XHvl.4?N{D38=|4>B5.I&D?!s;i' );
define( 'SECURE_AUTH_KEY',  'Bv8:qi?<&8$OHbLi0Oa??1P3 mBi%VQ6! ^tx(n0DZy*s8J|=H=d_4<%.~8NtjE%' );
define( 'LOGGED_IN_KEY',    ')@KrN;x-Z<kc<oT`t,Ms{=?PV~Wz/Y0/fh}VM.{;D#O54p7mJ2!$LKrw qFMcj]y' );
define( 'NONCE_KEY',        '40{--A89CTBi!otyUPb1f55EIWf~T >Y>@mRY{G#rmU,l30fN#MD-?W`JSoR,aqM' );
define( 'AUTH_SALT',        'b[NHsgtz@7(y YIKUSG})ZV5$N=Z3u_9)EG1=12;qCBl[2Rwx (ay_auehhSR,c8' );
define( 'SECURE_AUTH_SALT', '?#t}P~^Cp)>O0)mYj}%5yi73w_~oy;9-+Nr;X,>(s9ar5]*T*;)IJG.t66Fz5/*x' );
define( 'LOGGED_IN_SALT',   'A-yo0<qQkFJDB%Ne7;RILFa|sA%n xUN:_QJ<$(we.JeC6V39st5$AgA2F74Koch' );
define( 'NONCE_SALT',       'U0HdiHf9z@hui2`O?AC<Now2tW:*~Ou8`=+R>3pPX+rJ!,nxx7-% K?]*p4iYqNl' );

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
