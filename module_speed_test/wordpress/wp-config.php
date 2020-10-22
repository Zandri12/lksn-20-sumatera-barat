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
define( 'AUTH_KEY',         'GUcq>yu:)6LAP@R`%jH{%r21zK*0Kv[|4B)4S,(<LGV{lwV ed<qXik&,(MM0}L.' );
define( 'SECURE_AUTH_KEY',  'Zm_bB5k9C0nlI,l-1xRJ(RswZ`G<s!URv>_[2u|u;.m3bd+#Q|w1xbMkh@.Hnc/?' );
define( 'LOGGED_IN_KEY',    'zuz&C#.Tdr9Q1Qis6#eG~Or{s&VyM&SXNY1{2Wj@[}K*!=xKKlt69B}6mi6]LXf#' );
define( 'NONCE_KEY',        'S=~punh_Eww4W_s=3!:*^)hU/dou!ZgL3Nk2v+PpexI)(T/W?biKo 6pvpcVtSM@' );
define( 'AUTH_SALT',        ')f-FH3Yo#x!u$|WFdK$07~UgtWsA`W({3W.uc!FL 19}G`<E]x%G/?<1*C~YT-z:' );
define( 'SECURE_AUTH_SALT', '~StDQz^o.Nr!6h8>!pkR+l<_C9D.9yABEGhg!o]>#9R_nMM:]m%h&S&/4{I1K{_>' );
define( 'LOGGED_IN_SALT',   'OKE-_ y?AaKIIf0l[K{x$O[HV@lJy),+~.Hs0[{cMLM2[;>UwU*usEeSguULhGO<' );
define( 'NONCE_SALT',       'I}|W@UfN.fk+&,(z*tuW+%m,|2bTTTA`(<i}NT=)+`k|KtJF^${{7TTeu/uo3)Yz' );

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
