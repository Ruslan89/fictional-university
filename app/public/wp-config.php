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
define('AUTH_KEY',         'CMbSrOs84lu5Gg+0zf1cYld2omsoYC805zOLMkIsxKhN93r+5E7BVVZSBGmfONL9oLMmOloXLGqVdxhFLOBiGQ==');
define('SECURE_AUTH_KEY',  'RpNW8vIXLbx/vg2LufQLo0jDlqTQB1CGHco2AVjWXAIlHmgyK123Q9Gr7oN3O57B3+JmjtSi1w2THvVTCKY8iA==');
define('LOGGED_IN_KEY',    '6pU20oxpBiheRm9+rf9s1eNtkgTFzNIGMDWGEMTkImOoMZVFW0cnRvfKEXxBiof4dri35zBpHJ5OHva1Pa5qdA==');
define('NONCE_KEY',        'U/GlxFr7Djbog/UziEWC7V5wVCCzEaZMrk4g4VjohAHcQp+E+DKNA05jH5fze/JAaKBZ6EfOaZhnUODNQg1HLA==');
define('AUTH_SALT',        'WVpLm6bi442IGlE65VsNxPYR+kvtJ+FhFqQG0pMUpkQpOnIuMOhje9DXs7OHKyD05sQuWI/OpVXz0+86TPgDxA==');
define('SECURE_AUTH_SALT', 'rX3b7+/OjIw7WneBrNmrQwIt2e3pcSPB+PgDjWS4GAasaxGdG6psRrmWw2t9FCNq/kdWDpdh7yPOX79cY7zRfA==');
define('LOGGED_IN_SALT',   'gjIapAPEWLay2JcVDG1bf4zpldfrX7CnxaI55IvJ9/Gh35LdXI93X2CPC3Xj0zmqRgH3L892yJnAV9zdRxdN5w==');
define('NONCE_SALT',       'aLmhTEyLRq1Q9nG4WRGLn334CGZwXYAKQIKmz/ZyBV1YVzsmhp2vPn6ySATGBRANMaLkI8qWpLdTAQFiXVFE5Q==');

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
