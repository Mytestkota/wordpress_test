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
define('AUTH_KEY',         'IQ7YvimPnWjq/0gxGW7di4thP1Ar0+7u4sASmAM+UqJIwacaT+Jg5nzuzr8JH19HVueagLGOFuVo0pXz/ISj6Q==');
define('SECURE_AUTH_KEY',  'n9jmxR8VNpKCJFEKM3ec2yKlcoRvtwyMFm/Zt93PrLehAOpUWuAEAsSZb2iwYKnxTOGvCVe48rjpprqTuqf5LQ==');
define('LOGGED_IN_KEY',    'hAQoyaPktY/L+lP1vHDPMFNYqbHlDsop0t8gnbWEKR1sMm1vyJNuEegvA1GvOYRHYNNev/ojnZ/9eALhdFBn5w==');
define('NONCE_KEY',        'hV8oLj02KjxOEgmLQ1kUYEKW/Qafv6Zk7ILJtGcErM1099FqdNBYGpVco8SBeytOwFYnXEfZyMW6uXy3YsJifA==');
define('AUTH_SALT',        'EEOkElDgYKwrV3QfRhkCGweNjXlOeUg51Nid+ud8lOsAKqZjga6OZFBqEm28+AozGrz78Bnt48LUtDq6t50zUA==');
define('SECURE_AUTH_SALT', 'mGde95cMxwjCk2InNGEWCkRUiuNB/ZhOfMG6MBlvlr+tDjuWK+pvLz3UD533ru4bkPUeykBZAg/Rs26rl97EKw==');
define('LOGGED_IN_SALT',   '8fTaaFZzOfSolabCPjSLKgpxeLifjc2R/ie7IJfVgjfyYMcCpHksHPrKC/+0UTyRCcVmfaDQjas6VvB4n05H+w==');
define('NONCE_SALT',       'EiNyKGhe+gni6PsKx+JwYcbqltCalNYh9XNcrFkSsZkvdpp3HOmPzMaSkJS7Ji3S2740110CCBpSm6C0bEEVWQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
