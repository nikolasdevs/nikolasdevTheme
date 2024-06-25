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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '}/;L=f/fQbKm9|)TlB&a}uMR{U2B@{{J>bL.>YA5+_@oar/Z)=rA}(>$Xh+SqT,V' );
define( 'SECURE_AUTH_KEY',   '2&Pne+i?2?b<(MJ?ZBLfwv5+Jj,3j{1v_gizCttE!l/Z}<e0SEFas|ER_/K_Z<Ff' );
define( 'LOGGED_IN_KEY',     ' h3W(8Imm_;D*i:HNXI=Y0*OnmlQi_aTKa.6I,>Saf(g3gr/?m<}^!Yk*x>%miZa' );
define( 'NONCE_KEY',         'LEAd}zT!?Jxgr/|L@0%wmg|FOxz`ZHWj{P|P?&4myndP/6<?mm{Mo~(M1p~G>B|R' );
define( 'AUTH_SALT',         'q1 9&b0<}-@9QXBL+mb79. mXQY+S:,3eQ>84HOKR`1?`xj<]o;<l,<ga})ku:7*' );
define( 'SECURE_AUTH_SALT',  '_) 1ZvD5Si4mouJfHp2frC**=mJ$`9j%6I!j:Jug)FB,sRK9nojD!X_rK^HWf#)Y' );
define( 'LOGGED_IN_SALT',    'Hvvr_tOxM!-t^=4$4)WGW`l9eKLeXUdx><.Vs7N$@3CfOQm>YeR#GlUl^eM.rJmJ' );
define( 'NONCE_SALT',        '){Y@vK{p6u|xR)&:_i41e0U~0Zrk++X::jIHDsI<1yP9Ct>#,WDh:rABmVqkKG#)' );
define( 'WP_CACHE_KEY_SALT', ';7&jbAI} mz=:_%it{nVxhM3?sTg/|7i=vK+s]C%m2[q;a-![oz|{|.{l^hzGQ|Y' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
