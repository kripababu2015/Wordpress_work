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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'm!dPn.%CuTWbn(RviYQ%J;Fc6&gP`4RTP8X600ZKY}i[_8pJ>,[{IjmURuHm@SY*' );
define( 'SECURE_AUTH_KEY',  'SA)q1}]CS#RE?)Bd _I`5OwNx3%*}8GChs[+/EFgewHH4ax?uSxj<?H7Dib8yN~9' );
define( 'LOGGED_IN_KEY',    'cH<&DxdW&ZlV%99z&H_v([ABIZG9I7*aX @gPcc4L{j`8>ow5)!2/`q|5%MzQ T[' );
define( 'NONCE_KEY',        'tu|dO].YCxEEX#ry(GP`7,fk?+cazK+ YQdC^f2:6ZTz2a*Wbad$e5GAUivExn.F' );
define( 'AUTH_SALT',        'F8`|azD@*7D^XR`rHUvbC6v|u*$.9ms_A**xg(_F`12xi[c?sSII_uxE0IhM8^ F' );
define( 'SECURE_AUTH_SALT', 'uKJrR%QAOY4pj}R`EahCcL62 ZUQ4$wuZ!ymHZ>Q>non>N;/D5~jW_g6|XHX}o<I' );
define( 'LOGGED_IN_SALT',   '?D<:^bb}H;K<sp&*PVvzMIcfIN*W)yb,EDEJ$ErXjnyo}NFj$34,,r}XVsCi$r9d' );
define( 'NONCE_SALT',       'VxGoKWMxwRnLm/(g)Ltj]0]=92R2#FC~;yaEv1BjFWfKhnTLP&VH!N%)sL H:_wd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
