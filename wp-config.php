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
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'tS8k!Py2~C7_i@/>2EL/Z[^PvrQcSG:GRCB~nAF]DNiF)9cpM80kH_{dZ9GPGeUW' );
define( 'SECURE_AUTH_KEY',  'OSsr`yx|qgOX_8c#jcrm7yTPSL~_VJ7DEhI}d rta%!v&n+ZbqCoHF@QO=-MH4lF' );
define( 'LOGGED_IN_KEY',    'eSBh![[ZKcE9l T]TaAO.%nBHbvmiK-]!z?^Q^?L/x`a-FKF~pam/BdcvU/G_9Y_' );
define( 'NONCE_KEY',        'qt99uSNiqm>z2WpUTC`0uB D{9L-B1qZ?me2bB/Y5T[tM`^RG=Cpw7Qj0TqouiC!' );
define( 'AUTH_SALT',        'xIEGEvi1:l{I)|,9|p8hjM7mMB.y,L0LE[fvK1Vq /fQ^lHze,+]g.bX#cwftB%k' );
define( 'SECURE_AUTH_SALT', 'Uh(~7-Vte(g`S8PT1~^t4LR5~jqWiF{;@inM DYUE+C0.V+~/@%NEpK=&H2GQI00' );
define( 'LOGGED_IN_SALT',   '?~Rk%S6cewienn,)L5+tg~J]ll>WvzC`s{fthbf0S=T%~RL(!h*?9|SfY:_082CR' );
define( 'NONCE_SALT',       'ke7pBv.Y+o<pSI |]p?W?Uk8T`N<qI,Rx^GL5SkkB@Q)5STb` <UZZC;{d~s`y)8' );

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
