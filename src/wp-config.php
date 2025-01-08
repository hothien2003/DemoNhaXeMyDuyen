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
define( 'AUTH_KEY',         'x2~@a|d2|tzvi.cpFP`@W8{JX]f#hw^c:jm;yVyUQ#[k(2Ch_rezwbxh^H8F#p8k' );
define( 'SECURE_AUTH_KEY',  'EY8U5j`S;D.|U#`4O`K&)[hO%>?}@e=^V;~vJ[=S19F.,3nm1dY/Z1!<ykrrIZpX' );
define( 'LOGGED_IN_KEY',    '0ceMJ6 BE*6e4vue[wh/>/H-Jk*G[,jyCQv0X7i[i#.I)S=1CUj?jV8Jzl_U8C5K' );
define( 'NONCE_KEY',        '_}^7,|oGuACW)b5g/I6:8;:v[V4;$^x!a&mbt<_12i0N6(7/NC<aMky|M]LmuwO7' );
define( 'AUTH_SALT',        'nX@=g%s,kZqK= v;C&*[svrq?n@g2Hml4q7a*=tQO-TvtYjZb|AzSYOH[],1BRCU' );
define( 'SECURE_AUTH_SALT', '=,Bdnl5j#/[:QBc]h64k_E_%uOx+MK4`Ipjr]Un$%(nFZ4&Mi#,31Em)wQW)VM6)' );
define( 'LOGGED_IN_SALT',   '4]{fag8<,P!z6p1;y3:~;|i.?}r]eK6OK>&]>c,mMp2>pgI7q-,nw-`c^9Rlmh$[' );
define( 'NONCE_SALT',       'h GpC?D;0_|i*y8Cp}{} .hu0A<zlT&E[yS &;I:d^EsXKp/gp(=~?S8CI~3sQS3' );

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
const WP_DEBUG =true;
// const WP_DEBUG_LOG = true;
// const WP_DEBUG_DISPLAY = false;
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
