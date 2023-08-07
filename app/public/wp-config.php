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

define( 'WP_ENVIRONMENT_TYPE', 'local' );

define('AUTH_KEY',         'Mhtcvq5AVksz4lB6UhT+GLUvn5nLMtkWtvyDvr9DBIdgpEXJShsacwg2bq+NoRHRNDJi4WMxjjRVb6lcIFJoaQ==');
define('SECURE_AUTH_KEY',  'hLfI1M4AdDEtO/OTTlt4LrD4uVE6eBy7/bK1uxFuu+GN3a4l8eUx5hQaFOgq2abT1lbYoTh9dURQevwod/hZpA==');
define('LOGGED_IN_KEY',    '1Ug/d7mMj31KjviT31wX0LR1j6BPuUM+NaqJcdaZ1tyKICqiOp85GJ4VTj2l26dnNRGMqC8NDodNIGIDdrUQCA==');
define('NONCE_KEY',        'JqvegxhvraaWdDW3Qax6dFiA0CpQOw3KrxdMWeBZYQ+6R2X6H4nbNL95AOfWNk8ktkTHqRzRHNiEgI+R/NsL8A==');
define('AUTH_SALT',        'ma+UWEsffZuYmYkshZONlArqDWMv4XXwkd6Q/ggXh9HA2+NJufcqOKTa5mcN0T/9gBGbUGnL59QwYlugzePorg==');
define('SECURE_AUTH_SALT', 'M5OXmlLJ3ZIymM+UE1fopRtmjl8kOH7hOO4gCRCMtvSFv2CRmiFErkEWOEFosMtUUlQszw+6vvbsYhqGEcn5KA==');
define('LOGGED_IN_SALT',   'a0cXRaqGchevv3JdyCKRf8HJYWLZqwI5NyvEyIDnX05Sc8SIQzLc2RqXzbsKWF9L4SNFFLoTE7+qscx8eXThCA==');
define('NONCE_SALT',       'T7hN6mesHJczU5ljWKRDc7QYMZ5bciZG2VJrP4wOglZQDXcJGXmFeLyhSuWSoeqj1qajwb7PeoI5KpGN0c1TTQ==');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
