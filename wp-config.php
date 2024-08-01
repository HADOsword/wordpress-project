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
define( 'DB_NAME', 'cloudchest' );

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
define( 'AUTH_KEY',         '~PAsvu4M)QSD&A&Z]?+{QS0a9h*e=,WPae)opLQJ1Bgj|X_eUU/Z3L?~2Gs)Kb <' );
define( 'SECURE_AUTH_KEY',  ':M_r4mMN|*s`QR-U)Mtx<Nk-h.-`fz-0zcRrVXE&<+aJC(wNEkyPIeeW*N2Vo)bg' );
define( 'LOGGED_IN_KEY',    'hW|?@ 1MuyCvmBi@wcQ2.;P66)-xQp+Uo}K*|5v?``6PK#?n+IPU;{fZP62t6vVe' );
define( 'NONCE_KEY',        'dnkWX=!Q!&#krc+P:l%/SJC G-|Qq?h{c>T|2F=_>S/goYb31L?X!5uE3sj&7 ~3' );
define( 'AUTH_SALT',        'Q#-CxuAO;>QYuc43ogaMGID:4#vGyR;HYvgh-+: t@(/[bzd_izK-8?y%tPf8XU>' );
define( 'SECURE_AUTH_SALT', 'E!]A%]ytTT`!=dAzlO)Sa]%>Hg+NJYGS}vNC(D{J<z3cklV-^W&Pj{^3&E;Vhi7;' );
define( 'LOGGED_IN_SALT',   'hX*jJ$7-wm5g>,0}m!f{gk_Iv*zNy+&CrIQXbbilZQ-<]2Ra-twz:MQ#Muos[B`U' );
define( 'NONCE_SALT',       'Pq7@_Q?BouXKQ]I[460QsGPh3#)V#~6%e)XWCb_$=$B jG=}C],Y}}Ynt y6e`X2' );

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
