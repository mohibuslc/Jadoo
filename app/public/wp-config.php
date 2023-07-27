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
define('AUTH_KEY',         'Ph58/HCYqmUOqeWRfWhxIkN0+SunDnf5PTIglJdURZ8kSswUeFyl5icKw85JWTbT/f6rmt5UV5Ds0z5mTQqssg==');
define('SECURE_AUTH_KEY',  '/XkHbj5yrSh/7pBHRBPGrl5avnSxq0AF157EoP9qzuO7UsdbIqjpM0q6SnRi9jwj5NI053K/JcVM1DiXPI6eXg==');
define('LOGGED_IN_KEY',    '1Gbb4K8mRM1hV8oDlKXIX37C5yKUGFoRGJbUhKjh7KLuVnpxSZSU8LKAOcVPRkOEtzhu84rh/ixC2EHhSOSDmA==');
define('NONCE_KEY',        'oz+tOoHSkarqK/pOpXVfbcm/Hfo15TxeYWpy2F/mrCilUokUz/pCqstuOd4W7ROnwtWToDJyafcaGGuHNf3L8Q==');
define('AUTH_SALT',        'pOZB4UbezdJyIUneASSzgPdmlf6QYNQuK2WhjV66WxdY4nxE78NbckHr8cqQa61K0zWP4DaNVBkyghND+A9iIQ==');
define('SECURE_AUTH_SALT', 'PjMlz8akQElsLJHWJZejBZC0jC3hBZIYT7wRQlL6AlbErTw+ACZjCk+bg5OkQIbFwEo7Yifxx4xEtyBfjrmezg==');
define('LOGGED_IN_SALT',   'wTG2ljDu6CyT709FT/EvnGt5+g/Du68gA8LJTGQvAiEboXgO4l/M5im+8dJFOkKuA8M3en8HGhrDGj4rYEfiSw==');
define('NONCE_SALT',       '2yVuExAsf6C6pU/JBa4jPvsxn1A8h+TMxA+Iw9UQ6g8hKV9kLpl/PG/h7BuwFc8st7GMOkZdim+tl9G7JN7kiA==');


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
