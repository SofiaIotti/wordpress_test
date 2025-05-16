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
define( 'DB_NAME', 'wordpress_test_db' );

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
define( 'AUTH_KEY',         '1<_?<vVUh!,1^|h[SSB-7cc}[_~dc9>bjIe}:oy9v?NDM*ot>.+s[DBQPn;~GDGa' );
define( 'SECURE_AUTH_KEY',  'ircU|u#4P1otC_sNW[e.gm3kV?Grv}3?4)BJ3pkRjoyEq0$2p_)bg$.4DfLEI(,Y' );
define( 'LOGGED_IN_KEY',    'OV8h}QxK?e^v).nU<4r!%*Q6xbHtcMDWxLoAJ_9}s6 Lh{I?Aw1S!nsIn@Kdi-Y-' );
define( 'NONCE_KEY',        '[mCAnNAVG3]6-ASg>{kerBR[.vEf{;,H-P=;G#M=XQq*Ka=YJ9{ZDTB|QZw5ch_I' );
define( 'AUTH_SALT',        'T-S+q{3G3R`gxHe246@@z&kvA8IBz%IcF5Z7XAOTv_!P5|?(Y%,|SJxCM5/[R|TS' );
define( 'SECURE_AUTH_SALT', '~^Bq!$;GvU`JJCq$-p<|~wK1bBa2Gv,@scdQR(]WLoNUK|DjRO3S&}dC[tE5;N8[' );
define( 'LOGGED_IN_SALT',   'OlN[e!**m*RFOv9;$vxqP?g8nGC3GD)%MS`,)!=34?<Ee>i_N3n6dzNkbeFIusDh' );
define( 'NONCE_SALT',       'z*4S1w,u8RIhRe7G/k5`3Igl2;OB><B1ZaG[[u[be@;mN+^*iF$D%Y(-s]dl?/Uo' );

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
