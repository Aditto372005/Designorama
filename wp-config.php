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
define( 'DB_NAME', 'designorama_db' );

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
define( 'AUTH_KEY',         '2giDV),&DW*m;l&s[a[sAgD><yT%^`<tO5nU(A#l0iup!`qA0zT,Z&^GiQh?DZIP' );
define( 'SECURE_AUTH_KEY',  'E88)>(_6G!gkw_MOfiO)_8b pSbmM:u{Rfh}O(}nX!*m:5JfT.O$Arn1:Z|S.h{9' );
define( 'LOGGED_IN_KEY',    'r*oMA%dNI/;Z$zyU2P+u7g7k)=sG)Z-a 7x-RJNItFK3:!W8wymOFau0h5!Mo,zW' );
define( 'NONCE_KEY',        'lEz%M8DDhj]8wlf4ZTWE4oZPphT0?nN8jns;z:CDbE?yN#7tj*qS]BHp 9Mx8G)6' );
define( 'AUTH_SALT',        'Q;(`hCh9HpKnN%ug1,Wrlax~|Uhd!&)e8*:aO%B|ZR_fDWC66My_{?[$:rBB-O:o' );
define( 'SECURE_AUTH_SALT', 'Fc6=a_F>|g7G%L%Xc+%]Ah0]5wm*vqzic?TJFg39%G2n&7G)zbVDdaPK]K,?VJ;J' );
define( 'LOGGED_IN_SALT',   '9WD_w2PXw,O=hPw`0m.RILEHE($h=:7]O:oR%_Bw1eb,IyBeyO92,>^%/p[RK).C' );
define( 'NONCE_SALT',       'ei&QR+.vDp7.pr`s%*%fqlkarkBU,c37  -~`FE^(vv*2E3kx>$[V?d~r#wkvV98' );

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
