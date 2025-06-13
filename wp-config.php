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
define( 'DB_NAME', 'newspik' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'va8qbbNF9>aF&BcK6G8-KYiG|,(qYpfqOx[9-v,7DSf`:I#%EiPLy1,Q-C3j {=:' );
define( 'SECURE_AUTH_KEY',  'z2G8LKC-XX-X;6O&N@pk$AUe|J U^8pbeT*DH9sd=I~UyWs>?pQ@GP.G[*chYwMx' );
define( 'LOGGED_IN_KEY',    'j}h2tu#tAxVsm$k/#_`eDJ[mUvaojUfi{HK:n5Hg(hcI?UJW6xW!0Uo}-5T&rJbt' );
define( 'NONCE_KEY',        'QR3Ii}4t.!fHb`4NG!58XwS=4X2nkrB@4i4[7!7S8-r+Ki {S|7/+nYD3D8A;>xu' );
define( 'AUTH_SALT',        'Z.!%t#,D8vt,>+#^i(5`Gg5I{H=@gN0{Ya]5i6O*.BaU_zb&^I8cF85<i+-+Q?nm' );
define( 'SECURE_AUTH_SALT', 'x!,<yy+|njbNHv Dz^T`7ekaWIO>gz<=&^*Le5pe]!xz6`2a&fyCO1U^p|dIqw{4' );
define( 'LOGGED_IN_SALT',   'U`)e_Ok52mkFd&G]/wqxuD0/G]Ng!>k{IG9C=vLYqG.l;1DRrHtLeH6 O8)i`]4Z' );
define( 'NONCE_SALT',       '[32`?x|E R;Y.o/wZ44ng>sfn@Uv-8t$|)6<wr>L?T*7 |Ip&K=m|oz3<[Kev|2m' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
