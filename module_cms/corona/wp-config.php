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
define( 'DB_NAME', 'corona' );

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
define( 'AUTH_KEY',         'T+%e;hpa8qaF@7hxFC]YZP->W/<QP/w7`uLQHWc.@=@t$@ZRFUGvw<XEZbb7>a.R' );
define( 'SECURE_AUTH_KEY',  'oWZIyx#<6.`jhF`:t<Gl8NMC8S:SrQ1cntyWGg:a7AGBR)zw{/NWwo]m4m`%!;y8' );
define( 'LOGGED_IN_KEY',    '1i;wfJz+Ec, ost/,pSt&2fb)rqu/&}-T!DxTPA&m8lBxW=!yRdHDX{u<&3Q=9gU' );
define( 'NONCE_KEY',        ']A4}v-TrCex3.v}a8BiNW{H_xIge1rLrDA4 A4wh@1H.1xDX%49hrp#mbkD5H$R%' );
define( 'AUTH_SALT',        'n`euj=A?u?_?jb-)@u-KNkPx3W+9)/T:)/O<Bx%K!lbyJNo.+a{;P1T?5gyCNAQ>' );
define( 'SECURE_AUTH_SALT', 'MPW,=[Jrb@2-|AloRZ2l=/x0(h(jGY{ZP@Nqf[^VI;~s;;o*aIYp:Jqb8)BKV0jv' );
define( 'LOGGED_IN_SALT',   ';H/xv!`OuXg%Wjd{PCU#W&(P_hx3zQ;E9K!J;WVSL2#T8gH^-Ss HS6Zc<D3OX{[' );
define( 'NONCE_SALT',       'vU+&^2;u|D~Y?Ao:Kq3$gN?&L`YW+g8+LzfKK*d NTs4Tj)w*:NF>]N1&@7Jk3JQ' );

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
