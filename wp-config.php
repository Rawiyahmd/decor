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
define( 'DB_NAME', 'decor' );

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
define( 'AUTH_KEY',         'mcRq/Lg%dW.M+B_` Gy<QhG9j9N3V{>$lwDXDDo+D uL8;{QeizsP|sXi >o~Diw' );
define( 'SECURE_AUTH_KEY',  '7Y/Bj8L}$1d&eP=Ei8r+Ijg(h#8(n 3C0r#BiUx MM8Yp9Ol0.~4^_6yLXOK-w6R' );
define( 'LOGGED_IN_KEY',    '~D.Dy}o]Os7&bX&rVTD7A%~TPvEa`vX!xLO>bZUSEu/3`=Z1xp}aE60/x8WE^nPL' );
define( 'NONCE_KEY',        ']vX*PgeZcp+P*TNd#G~nf@YzEw3y(^`Z%y$?`L%Od@&%}r#?`[FJ}TwQ;}U:Kg>7' );
define( 'AUTH_SALT',        'f+C=G^`_u=tw.T00@mny#nTs} 9I4M@L>DnPe~i&Yn@({xkbM>*z9M)j{53U0lg<' );
define( 'SECURE_AUTH_SALT', '-1Koj)e Oqya3RLuf-8}d%%4HRT1J JlDbM02&JSoJo!~QCHd[;eY~}V;%@hd:c)' );
define( 'LOGGED_IN_SALT',   'G1H_kJc94UhVBO(dVqWop<wZvPlst*=G!x<]@b55Pa3YohsbhjkOLE2Y Owyb@qW' );
define( 'NONCE_SALT',       '`^(Mk5FM0,>{>}Rlk:PO=93F~WVE8>w.8URwqtFhvpPrZ31f-]1iXmM/r<CzcRY7' );

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
