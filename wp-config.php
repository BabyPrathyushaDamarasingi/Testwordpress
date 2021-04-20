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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '~Kln{8c3ix}xno0XCRjVc&:1q*lC7!K4&]7.^<W:4|g?f3J-l[65Sp5)_uFCPR?g' );
define( 'SECURE_AUTH_KEY',  '=nk|z#6CE$nYi#JBz}w7<lM3{^lt,z|0x5O;}/Ix=8kc7.9SSr~jZ&@h?$/VrIBq' );
define( 'LOGGED_IN_KEY',    '.cy.,*BDd~&tI~`-hH]k2Q& W?PS0~2mi?wl[D|{j_A8w``z,qUEdH|!k(I).Xt?' );
define( 'NONCE_KEY',        '?9c}yP&f&sQ%A[{dS-S#=AcHNrZvX]ob_AZL>Ov9!7=MK.u=OiOz__dGBPr5DkIz' );
define( 'AUTH_SALT',        'n$1Y~ |31lcS|DR|_!Hl.bn^O~5}?yM[3jH3(D}k&~B0`ogQ![QGQbP2!dVIyNSX' );
define( 'SECURE_AUTH_SALT', 'c--xN1DvCew&2 A/yT[MR9Iq<Hb0<JNVkzBo`NmtD3=(Rf4D}RO+iJBHNPF,9M5!' );
define( 'LOGGED_IN_SALT',   'g-7w~RbT~4jZgy-:o|h#-p+}JI Xv`j<8My8#bW}F172~E%yXAABuz[X^OO!7s? ' );
define( 'NONCE_SALT',       '$(1k!EQ/]j~<[g7,=ZpoH$}U7(kmP6lX!tG0xj,jY5Dd,/Z2BXYh/pm*12Bz6,&d' );

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
