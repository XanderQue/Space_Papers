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
define( 'DB_NAME', 'space_papers' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r!=|LfbQ]`R78ID34XMX5I@o@O[Y+:F,rSDjDa0~P$wAm`&Ji^rF<V0Gq;s4).P(' );
define( 'SECURE_AUTH_KEY',  'hYMZeoK%%8`Y_=:kX[.M]rUbZlK59V]+#Cr:X;!z5^3>l[ ${/GO?jf`_Y#;M+T|' );
define( 'LOGGED_IN_KEY',    '@kXTkkJ;ikNe[x2LtBO6z i02(.N@G YY39KGMQD%7k.[g}(^#J[sFEy2adC2xI:' );
define( 'NONCE_KEY',        '.l27 0J/=x,v$*``MuHRiHbP_Csop/)hA /5yC[pZqq}LD>itw[owmvQ}C&/kqb`' );
define( 'AUTH_SALT',        '*p%dGIom28i$r+~jlZc~jN9j9MXofg6wa}x4N?1*YiHW]obHtW)ARDEdS{~UZKPt' );
define( 'SECURE_AUTH_SALT', '1g_5;566^3$n*=@J#G&l mAbgAli)%7A_w*G-`V)8-t+N0CB12v]b n%^/gpxh9e' );
define( 'LOGGED_IN_SALT',   'U0,]WM^23Ra18[Jluj5E&IwG%FQ[S>~$KB;LJ2G|vWC =J<r&.qJnQa%WHLFksxM' );
define( 'NONCE_SALT',       'waErlcBYC5B7:UkCCF/^Ez4{]{f:hJr&l-/RCo$|Axbvbt1o@0>y7+9@E-}eyDY^' );

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
