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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alej4896_wp543');

/** MySQL database username */
define('DB_USER', 'alej4896_wp543');

/** MySQL database password */
define('DB_PASSWORD', '!US99a(0pL');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fgfqnultwh4gapcyvo6cvm3li5swhdtyldxxgaohdrtlcdue3xajhbp2dgujmswd');
define('SECURE_AUTH_KEY',  'igolshmvluvyypkalhapl3mjthaeobhdresf2dkw9c4tkh5jdsxfabp46puzenqz');
define('LOGGED_IN_KEY',    'xehmkatwqkwkmxcz2en5upr5khaawyr5flutkqoar3azgiz3zcsi5c6o59e8f5sq');
define('NONCE_KEY',        'oagekcjytnn8zhmroiyhiesfn7ihdejbp2jxbg8lywn6ml1ftz6jzlrle0u7ozuw');
define('AUTH_SALT',        'pnuf8hajdgovmcpo0lihznoeyzjni1ikfiybhtig8r84outqqxd6zqdoti5qqpal');
define('SECURE_AUTH_SALT', 'dtkuizb8jdrusv0h6dd3h1jhucrfptkr1b1bxecao1fzdzap4nmv6agu4ocvvwan');
define('LOGGED_IN_SALT',   '0cnsepewn5m9fwxhjgfllvjvgpatsqa09bwjdctm9ujq1xlbhjberhitqmuuugax');
define('NONCE_SALT',       'tgj9la6aepzngxle76ktue24lymkw0v0izcm5pxlkgvp3xlde2yivjurwnblsrrk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp63_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
