<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nhimgau' );

/** Database username */
define( 'DB_USER', 'dbuser' );

/** Database password */
define( 'DB_PASSWORD', 'dbuser' );

/** Database hostname */
define( 'DB_HOST', 'mysql8' );

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
define( 'AUTH_KEY',         '`f,8|p0jKm@l]mP( J~L*mQvTy|:76PKmy(RSsH!e]jx/*[.A={quU!cES-F{UGr' );
define( 'SECURE_AUTH_KEY',  'kO.t6Q:R+M|aG}M@(_0;t6N#fLF=`L*y!hnCgHT`;],{dy!pVF`Wq9TRquff[bBY' );
define( 'LOGGED_IN_KEY',    't:6O5)hYSnK0$Vz0Kvq9jR.[/4`eG_h|^C;g.})mKuz0<E_{7[vXSS/0gNP,PZ2?' );
define( 'NONCE_KEY',        'F|5R0U07u9n5U+$HTFA8b6G|PGC!tQ:Y=?v&0|0^-Eb/4|G*M{,q0_NzpG3a$.[t' );
define( 'AUTH_SALT',        's.t{1 5.OZ=&l`^*,j#Nw]?j<v`4-UsliFY}!TAE{2)ij0WpiSbPduXlCz?GpO_p' );
define( 'SECURE_AUTH_SALT', '<6Z^5M0Nan{TgOPLt6ey8ibi$1v Sk=D^ZkqxL3u$5E=Sfr6Jt6N->}[]p@,X=Ca' );
define( 'LOGGED_IN_SALT',   '^^t6:LlSI!EEdIy8=G_KIVCbZz/4N2?*_AlkP[kI@c9WwzMe,qDU7bO3};}$-)nG' );
define( 'NONCE_SALT',       'mHpfmRlR>j}q3yk)bt%9&su(^0<,~i;=U|7J/i}G:Udc$![5GzFXG>|Ck9<{J_-)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


if ( ! defined( 'FS_METHOD' ) ) {
	define( 'FS_METHOD', 'direct' );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
