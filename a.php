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
define( 'DB_USER', 'kenny' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vietkhang' );

/** MySQL hostname */
define( 'DB_HOST', ' aa1mfeqgpcqff3y.crumkbvv1enz.ap-southeast-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '0nQ~ci{i,D}$3 Q9I=5pQ)5,,W1{l g[+~~1}8^_M5[5LaCROgpXo~5EF%Iw.8a~' );
define( 'SECURE_AUTH_KEY',  'i84jy|}(9!=TcTuHNTYt~RFJkwwY7R[.?f I4H$CzE!(py,4K)IJ}f+heD-y{3fO' );
define( 'LOGGED_IN_KEY',    'XCcF5jggC#H1BdU0Ld!sdzYb-s&bKEl&#/0=lOqw*kn=Ex{QbC6%@b9!Aq-+:sM(' );
define( 'NONCE_KEY',        '.QYEPvLU[=UO<Qcy2{t.V&+l]ECM>?a.]<`pBKtq=@Av uH@d{iER6)^4cUoFl-D' );
define( 'AUTH_SALT',        'wD=!%Hol*32{$qNj,bAV[)w@FG,(`+0o>6}<U.nxdn 4/JN1_yT.Q,0!~&; uJPb' );
define( 'SECURE_AUTH_SALT', 'izk{ujf#A^XkrM)m^+wM$?F,6izRz54wSYTB+qm. s5n~{ nAf7RE`MRk:otSc<Z' );
define( 'LOGGED_IN_SALT',   '|/1Jx@RIfWibz-7kWG!L=_P,6ZR^Vp;so2CmV%*vmA9iQ6Q}n`NLz<B`+Msw4k+D' );
define( 'NONCE_SALT',       'aT^*],Srf1U%t6=m/WeLLQE}xGW]IAiRFUTq)R]D?YfusYBB`{8lJLlJRZEGXHUs' );

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