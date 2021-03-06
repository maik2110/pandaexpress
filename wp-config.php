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
define( 'DB_NAME', 'pandaexpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Pe7CLFTJIMG2RqWOf4G8FwCkRyXfgXponDA1gOa9TecNw8a5WhoExtoZr34sgrCU' );
define( 'SECURE_AUTH_KEY',  'NSZYwC6IRujdd1jmSlOnvxtXyuhgpteaQSh5ohP5m8akHrEQ6FCUMmej5bLBGO3h' );
define( 'LOGGED_IN_KEY',    'lJrq79jXkFQGyKEODlJOrcEt7ErKEmmwWNlpny1rNmmrsOJ441oZ0x72vIqsbLqu' );
define( 'NONCE_KEY',        'GLvnS9EJpeCXvXmTeuNFlKJZsR0bIOPN9kY9BeOYc7UyiPGqrpEK0bafeeKNSF8i' );
define( 'AUTH_SALT',        '5tfusqFVB9aq1BxdKsXgx4YdalqMHGCwaP1UBN2KDyvOYnn3IvcsYyBcrBiIW2zm' );
define( 'SECURE_AUTH_SALT', 'zF1NfEcLWZUHNTppBDLYbYZ1mf373apqrMEdNbNS46EMTeI1N0GBx18cogIZ5xcj' );
define( 'LOGGED_IN_SALT',   'lkQJBIktMKbjxaoewtz19Kjv5mFEstdQq79ay2j7vPuTzXV4kr11iJOoxPIonyiU' );
define( 'NONCE_SALT',       '8ZHGYLscCwsWgrm3qkn36wC2MtjbRM2hpqC8jRPjXzk1fG07QJlq5rwAHnHMGAov' );

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
