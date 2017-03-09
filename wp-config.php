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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6kaOMdMkKon7MSt+lrPp//a8AklgvVpeKnFuTVtYByb5H7TrCQ7KMbJ+2nCxxLgf/zaaK+gifuK/oixiLO8rWg==');
define('SECURE_AUTH_KEY',  'akwU0WNuVQbGdNIYtoaf9TgswB2v7Nd5k3+pSRHcAJZB5SOw2//606PWqQqUAtw4Z66maDOkfK96fm8HpeVYWg==');
define('LOGGED_IN_KEY',    't/vA+GAbpc8GobuY90x5f4V+SwCxNtzDiTHAzPtfuXNBzNmRmREvu2FOykxLTe+F9TX7gzxCS39d1N07w7KD2Q==');
define('NONCE_KEY',        'tIwPNfjO+RkZO2DBnoLAHzx3ZNqcixhe4DpPp+8zciSY7a1TRE082clqKFwJzg8WoO3xN6UqoM89XgX/uw+v6g==');
define('AUTH_SALT',        'NjHCsMFmM9kOD3rToWFsbUfCdk3wEIQK4gEuJnm7mcSb5N2hkISYcTQhYA++BGxc6yyX4u24cX5bizYtbNRyRA==');
define('SECURE_AUTH_SALT', 'TYOJXGPilq9gdjTlnGZjkWVaL8vJWdyVQ3QdaDwCGBzfWgiurviFkjitWUK2U89NTBhin/G05E+qWfkvLXA0lA==');
define('LOGGED_IN_SALT',   'tNpSFakjwIqwj7b4Re0X0qYmtQeEQ8IrwAJHJJ/dE8ZMAxNz4hCfVqx7/sVPglzGUJLSFpFW2xKLexnIIKIWIQ==');
define('NONCE_SALT',       'VqMpyVcUlWGzNdD/q29KDj8VzQxRFgUjz3Oe5Qs9Oxg0duD+CPCobKTtqalwzM+JsavjC0twfzMCyGZn5LU98Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_SITEURL', 'http://karibuloo.dev/' );
define( 'WP_HOME',    'http://karibuloo.dev/' );



/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
