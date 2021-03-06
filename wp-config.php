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
define( 'DB_NAME', 's' );

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
define( 'AUTH_KEY',         'aFq0c/fT*UWhKtYy1S;_Ii]}xN#vrPQ&fK9H4y}yRjhkPQIaHazm$e?Y(X`d1UPJ' );
define( 'SECURE_AUTH_KEY',  'Opo>et5,~28Y{hR~hEt]{-xv->@ fNq(s)bqBo<g*y^3u1QO8X#V?$`[?fZzfeX4' );
define( 'LOGGED_IN_KEY',    '%x#CPu!nTgJ j)I5H51jv;pi] [WvY6K?&mml(7~$)66/vhj0?u^#7 |suk:Zf^=' );
define( 'NONCE_KEY',        'U[hK`YBkmKPS9VK:Y37^4e2U%= 9*DwovLR#C9=8U6ZZ,BI,4|t/CA|t$3~R >/^' );
define( 'AUTH_SALT',        ',Dn$?BNMFY<TUUPg5gYzJmBAcCTShI_U(a0vDI{!iGZKEk|rP,{IJz%k[{{}8-Vo' );
define( 'SECURE_AUTH_SALT', '<E=n[%KR?f%,51>>-1@D3R!qSS}O3*6K8<#3K:>Lz30y5,$0DEs?<`[Ul~aVDtjt' );
define( 'LOGGED_IN_SALT',   'g#yorM{:f|p0&6)Wnn+`g{I| 6:4Jo>*Nrr:tS<Pp!Y7U.cm1]0G.Q)d9!%%VTat' );
define( 'NONCE_SALT',       'C8CXA<N)I%#[6K$6o9t3z%wOp!hs6fdJza%<~%*Y`pr}e01>-rPv@E9gUWbYc<b ' );

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
