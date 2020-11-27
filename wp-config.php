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
define( 'DB_NAME', 'rakib' );

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
define( 'AUTH_KEY',         ';FT}y<VH#p6>ihF.6r$GXz^U/aN?KZXjW>]2h054GiL&*NG/;jwT]iO+AtnE3!RM' );
define( 'SECURE_AUTH_KEY',  'K@`LWW_ZG*-jNVt&Z)q1o]6%cq5}bQ:lQvNNz@EIYLw|c{[_OWR_Yw-AncELF/.7' );
define( 'LOGGED_IN_KEY',    'BT3$x9;_g=ui<D8a|95IH>U?.ul.=k/BLj])V=eNY.kweq{VnJVh]lOUm7Ap08,b' );
define( 'NONCE_KEY',        '(:4PRVg.RAC87&>a(#,cd,Q^lc!%x3+c2&MKj<=QY0GKVPXfdx -.Ht~Tls^xz7)' );
define( 'AUTH_SALT',        'cKj~_?v{4471 jfM,-Od3lgRC v2o*p7#XOr9xM/Pz;T0AnP3g9QhOdo4[p3Y9tz' );
define( 'SECURE_AUTH_SALT', 'B| rGvy$;R=!T^Gc:t$pb#^s2NNz9!Y7!WJ/9@Rhga{Sa?` B.IkSDsl/BvFJ9.*' );
define( 'LOGGED_IN_SALT',   'L+q%KDay<3&jgSZe^QwW49=6}Cs^&W+PJsVI!=[8SvSKp,PpSo[o[f^xI(QQE[1%' );
define( 'NONCE_SALT',       'P.S~4:=H,qX%o&F0ssE#D]pWOO/~f:B&*?x/=_Ycpfch=elBTD}Gi}C$A-7>rxIo' );

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
