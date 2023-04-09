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
define( 'DB_NAME', 'ZAG-MALL' );

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
define( 'AUTH_KEY',         '{->KbfxjqTzOQR6B5QHSOKuJp#]Gt#ZXqwqt=q&d]iM,w%tgu!,tz4C.|Z^~!qD[' );
define( 'SECURE_AUTH_KEY',  'V|$T TB_vTKTZSwLs}*3e|)|FPevpRX<pHI!n(QF}dA%#~a{koLkC Wbpy3c`SHy' );
define( 'LOGGED_IN_KEY',    'T6dr3((<Jsk~/%sg@AQW<}?i]] 2`zJJ*N8pA2kSmD4?CTSahKZ%Zd)cU;F!hW[U' );
define( 'NONCE_KEY',        'W*;rkJ(++Yccuk9D<U_-_tlz<rPfvh]!O)E.WipiXQn]/xWdn|^;T]/u56N35YY!' );
define( 'AUTH_SALT',        'A332hX-i1xqV2CanWjf9(V5(d?tIT[Do}&YfCc*-%oGs,QG)%=/r^/=vA)ZvAx0#' );
define( 'SECURE_AUTH_SALT', '$I@BCfeW38./3v|j4>|v.P`hD,r}vu$6*a47<gC#DeELIO#$R SP4[s{u #8mGWm' );
define( 'LOGGED_IN_SALT',   '%-iabU&.F4%&a~<&? Tlqepe{tm&^C]B9>,)@<uD?^aPTe0V7>!Xz-T+cv|ZgxOS' );
define( 'NONCE_SALT',       '8@o/3&>-WuV)}k>a^@av.xB)n6PrV:>l?N%&`|!=th^DG1#lw9j7z~ofN0*]X,}u' );

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
