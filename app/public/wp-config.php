<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'oNqlad2TdLJPgHw2cVHxPh+EmOqyncXoawsbdbtm+0oPQbUULAD4L7yMjIxTq0QovlfWcUPKZ+1x49pbB0pmsw==');
define('SECURE_AUTH_KEY',  'vDDINZQ3JidGa79LfDjLoj0NcxCxfiS+Xr+tsb+ZTuDB5L7vydmsieb/3R80BaJtMFYOYLtAN1DvgflBE35UvA==');
define('LOGGED_IN_KEY',    'Waagu4MDtJI0MD+9rK8fZaXq131fuESaSfQwZtLaKxqTCAkDasHiadcJuyMZrmP9G/jvprVGa/kCQAQsbDGrYg==');
define('NONCE_KEY',        '0ni8reXLJwOQ8x3NUOb+vpOe2tatVMzDvVYEyP3DsqMHNcAPjIWqCIEqNXG74EfXGLzqeFP8eM7LFtbo82LGmA==');
define('AUTH_SALT',        'bKC1lIOPZWaa1xl18RJrayb6aXXAqZX+yBUZcuUFI0fk1a9ZcfuQtCVPk3A1Or8mgrixEGBIYOpBtNasO2qU9Q==');
define('SECURE_AUTH_SALT', 'reLt5y4maUnf10/um2AodgZvNA7KMZnzKApr2cNgm0mNrlgqz2wMxXq+LWn51DAr7Ku+0Ua66r+vYgKwnkyCvA==');
define('LOGGED_IN_SALT',   'MZd9g7ru4AKq3bWcjgkPYTzmUuDdpRPUaTmOpEDeesU87P2jgSOKI/EhgKPr7M38gnD+9+ZMQqEH7uxlqiV1+A==');
define('NONCE_SALT',       'Jh3hv207OVix4XUfG8pU95lE4PefP9At2e7G28E78Zhn8MpV5vTry5JLCPzWWWsJZiMQ2JDxEnB+FbagWUYJtg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
