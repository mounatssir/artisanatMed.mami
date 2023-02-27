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
define( 'DB_NAME', 'sity' );

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
define( 'AUTH_KEY',         '&-OJz@Hd|2POc.nLXsD0GOfT9:U4G?c9lM%s:j&RC^hFXbRq?%[ t5,FeiXzSEq1' );
define( 'SECURE_AUTH_KEY',  'o(N,Wzdb!&2qlPbI(mW0w|=r_1.PAzz4[o:h&2<!E|Xe^W:?b<Pk:Th2jK|%JJCL' );
define( 'LOGGED_IN_KEY',    'dU# :p;nw~O5NnvJz}|sfs9f~([1~QnVH081R8soh/JCOmGQ8o?$G{JQ:Wg5VHxX' );
define( 'NONCE_KEY',        '8~-A{P`*vMF*E<Y>AqqfiEov41B.ugnW[g}Dh-!3rpzhq).4W%qI9ly}(O6T52j0' );
define( 'AUTH_SALT',        'Fc#SAg3f.DLTbTj3C)n)]ak1-gDJs9Pr>nr~v3#lfW94K^s`Kw:O5.:_gm-%MG5g' );
define( 'SECURE_AUTH_SALT', 'rXd%~h[z5s0%F<:Y-k1+$ zC6},PuhND;Iz!pJE3igK[hcRe(LDO9{mhTKfo6SM3' );
define( 'LOGGED_IN_SALT',   'UhFz.ND4<.^7~A_wx:A~L^#$|Q,)_@v!_;fW]v-?3=6OaLzG5Ye1EG:[e$qQ$ajP' );
define( 'NONCE_SALT',       '+rT}~8yVQ!6]]o}`qOR*m|NIFxvgp1>MgziVKO4DBl1u |pV/>y3PG_C;/IrYPC ' );

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
