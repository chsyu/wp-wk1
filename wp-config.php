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
define('AUTH_KEY',         '++mCtkRYWvbeUrNSwONjxfRmO6askOsh0R+5Inw0UoRpz9QJHUHfYiJwLvbT1Qzx98Atmj5vKBjSJNmiNhbBTQ==');
define('SECURE_AUTH_KEY',  'WDjK4eOp+l+2VHtf+c0QeMNLVi/G28N0A4G0Mk9nTMZ/slgNvdmIfOXxIYl/2eMwqfdWpVHvF6FbynmTEkIBww==');
define('LOGGED_IN_KEY',    'hio6N0qEtMmsRyB4fbio8LJLCfu/4zqF8cie3eTRkB1K+wCkUsOzjpmLkVBO5v1zxAVYpnf2bU9uPpPKIMmE2A==');
define('NONCE_KEY',        'F5omOPH0P90bmjYxLslwyh1p3uYajpKHbobYisZXxxsvgFJtNiUPZHtDUKbedAQYn8yekK2Xjxih8JnZloXnpA==');
define('AUTH_SALT',        'LvdDUB85fkGu/uEnEc0g9GVspjZ9ntLAj60LDMLrNaMosKZzYKkBZmzkn3/cHA8wiNwgFlhs6CZazYm5ypC9fw==');
define('SECURE_AUTH_SALT', 'IAOoq7h2pzE8NjDzuSbqnJFtIHX1fzXKYBW9O2AdxMnNp64Y92B2zTBOTjL8ZKEwOC3z+7gxD2t6xMFYZfjsIA==');
define('LOGGED_IN_SALT',   'U9fH4cd6LhxgCSEhHmFXc7TOdlQ/dsQK90lneE/4FLv4aqwQ/cAWo/GNTPaRCK1mc1SsaLtaeesNnbxxsTUf4g==');
define('NONCE_SALT',       'qmSWFWlxcS7awcB5+EK3kdYy33YtCDKawgei9M3ib/46ZSxzOI6AEnyHJ9WJ57mHKKaLMTMm35geRk3Hqlh7CA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
