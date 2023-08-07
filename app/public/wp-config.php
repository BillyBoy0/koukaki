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


define('AUTH_KEY',         'ROeHJYqxvT/lcQyMaC7qW7xPrxenutGF50bRT8XBhdjqZtl3d6cX4pYIBsZqFHQVgtS7ERD6AA3kZ8IgrvQcpA==');
define('SECURE_AUTH_KEY',  'gUeHYYQaalrWv7qPO8lDE93pn6gC7JN9Yi6iRkyMAz8qw1nkJ+CGwqaOBm2ZRCCbGF7TTKQ3ILRiiNxfFXUMsw==');
define('LOGGED_IN_KEY',    'S4JCmX3ihq09CLook5Ho1jI+jVzbcnjNSU4uoLx8ycX6AIzpGb5l0v0dRd2PIyJg2z25oei7J7BmLwPAp4g1LQ==');
define('NONCE_KEY',        'G+MPfiQPEoA+e9Zpny0qPfXnwdu72RZn7FbFkM1427tOGOal3wlXlBWWXiRjlCW8vkWQj3+hvMn5jZCpwzPPUw==');
define('AUTH_SALT',        'x2Ln5UPLwT3FnD1qQnPFy/161p4pDoDLNsNI7a21oO01jG8o1uH9OibhGjKx4lBWTxhUDj7yy6eRsMjpPrEewQ==');
define('SECURE_AUTH_SALT', 's/v05lGVJ6hLlV+6ulHc7tMZHQuFD+fji96wWzzNcMNFJcGqeVaO9j699FN3vxgCZg4uPq8QLyyXgeW5oMm8+A==');
define('LOGGED_IN_SALT',   'yH3V7DSn3mcvcpBRzFO/98AEuA3CNPzAiqPYaE4pDohoZmqYxXEMuhSAOqoOdGBqoY4VNS0ersKc+Ma2ZV7++Q==');
define('NONCE_SALT',       'NWwoGbjmwEYFda38dDzBLfjyFudN6XrEOzmbVl8IPNBx+FRygHpeFyRrULNYOeZyKr54dlyKVs8yfbyrUS2soQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
