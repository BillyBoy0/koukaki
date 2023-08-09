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


define('AUTH_KEY',         '9tqJQPVt9Ek3HxK8DPhsl8oJnNEk94iLmKcSv1JVhKksjlBNMwJ6zqDblCXR6l4xBWdaV/8TGcdkPQSmt4cT+A==');
define('SECURE_AUTH_KEY',  'yksL6L1ME7NBqgmQUNLCAJ9l+1MjLzLKGRUY+CL73yTSv5w1qP0uRTXZL9lpTnVr7PGHwLSw8IFW4HCLa4LjbQ==');
define('LOGGED_IN_KEY',    '3/UYcgB33ae9SZ/07l8lBYdUnb7zZNfJvG2/C0NU0LhR3+E+esW6S2AvOvDwWmsr2jsGiY88xZQx8sTrZxH52w==');
define('NONCE_KEY',        'uEL4CmAvdRGLwmhQrxdJhyHa9yzq6c/SiLwzJq6Rcclt6nahat+KgKfUUEOa8Y/LWqQkUmtORAUtwWdhyhlVIQ==');
define('AUTH_SALT',        'IMlIpEv9FPSe1OqIlUoAKDpsvuN50h9QzHoUHURmoTrn9CQ2OtUA47330keCZxz1Bgu5lF1tCtEYqcXHve0bOg==');
define('SECURE_AUTH_SALT', 'uJHQm4L+rBl9NrIALxCyx/rC7JQCFp5WiIM6nuhFkrxNIBKRdgsQ+RW09CBdVKwBXvR4Y/jgkeKoXAlIGkDbwQ==');
define('LOGGED_IN_SALT',   'CESL0SOj1aa2XbJqWaxBA7799kjtsDMsCxDRRxr2ax5oK6YEWL9pMSIZ3R38MTIPnOjpghStx45P31PYUm3H4g==');
define('NONCE_SALT',       'dTdUGR4ab4WoUQMGIUgeMKrRchrMUeq9NxOpwGDiqYtgtqE1Faut6XUb/070xgjK+LNZRgajJ/82VwKN70oqpw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
