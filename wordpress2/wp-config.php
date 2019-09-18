<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miaschmidtofficial_dk' );

/** MySQL database username */
define( 'DB_USER', 'miaschmidtofficial_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SCzY2wQb7v7dwtrH4uVt2hCx' );

/** MySQL hostname */
define( 'DB_HOST', 'miaschmidtofficial.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'x<M[vsw.$;LP$Zm-pXO+^wKh&h%F|1*Pk_Ieg9G`J2[cNiJW#&x x>G6cJuOP$)H');
define('SECURE_AUTH_KEY',  't.3Wf71Je$}pQ ny<K=vp5`MGuQ1PWy_O>=!]~x/$k1k%X];f$4=%R3p#QVrWaB[');
define('LOGGED_IN_KEY',    'x![OP/_-gacSMJ%0]&lA]c|#RY$O-QSt-dW)|%O6QX!-f$hC* Hn|scLLzgH|9OF');
define('NONCE_KEY',        '#Q%[fL]B?jNpS*Jp~^o.:u9:bVUpHPb/^CO/im)kH_#c9Kt(-ybi*/]u+|es^2iB');
define('AUTH_SALT',        '!$E%{W^NLPGs>3O5VjmFs;-8An`8f#P]Z+Gr$sJ[tPlcFU1^#3up2Kn(^s19l5,Q');
define('SECURE_AUTH_SALT', 'q6Id{n:^x@8p`^rXu.|@{9?zyGPvz68<q@Y16lIvL:rz`n:)K)-A HX=@SZuP-u(');
define('LOGGED_IN_SALT',   '){I=|3bN}:VNO9  _~2w5D=l!m4ayr#BG.ZVm|HHX!ri^)I7V%|O=efem8L~pBaN');
define('NONCE_SALT',       'Od5]ft%7})Ha?M:-/^b|m-@Y%RE|b+jF]|Q~DZrdbt*3+GOX8.LAX]%r).-!a&--');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliewp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
