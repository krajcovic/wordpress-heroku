<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
#define('NONCE_SALT',       'put your unique phrase here');
define('AUTH_KEY',         'ADUZHGqJnzT7HsxMVjPSU3j9QpFuK4a76jZf96K-WFgAFRzP5H-ztGvgUVqY-3_7k8jJKRr9CxhC7snL');
define('SECURE_AUTH_KEY',  'g_fnur58-joDTTPbL6W--drYSBsxstzodnWjwQc_QhVsewSqpVCsMozuKmEH2-KEHyzHS2zgnHveD2uH');
define('LOGGED_IN_KEY',    '5G95bbw3UhZAd6uQMWWgLYqKppAHL56U7pFQgxdK6w3SWuoZq4--RiyMaToGxpRxb_7cXrs8qD74DDkW');
define('NONCE_KEY',        'cNCxR5ZqQXMfv7zRwXKJVRxMgJSDSYVKJ4xqJ7Md9s5X-_jqr8GXGQf5sDf393-ewT68x-cPTB2Binj5');
define('AUTH_SALT',        '2nFz_Xqp_jWHxNqBg5pLX-_qhPR8KtxWRDAKJ3-WU_pnjkvQpHbsQutV3n-XHaYBQcPiEfkbD_E-TZ_c');
define('SECURE_AUTH_SALT', 'U3C5duY5Zj-ZX7TR2-Q3PBRT95G8DGHESNNSRuX_2GNt_RmvEcuzBTB8kGUEHVcBYb6nGKoWfibP_Hre');
define('LOGGED_IN_SALT',   'SvZmXCTqXNhPNcYVccHj_dzeJHtTtPdCWNUe3ZeEcz36N-P_yBRfaBqwoYwpst-tfRwDG6cuBLvzyQz7');
define('NONCE_SALT',       'gjebFNuUtFHNqXwpLZdsBH_aL3kvZ5j_jE9s4yrSxUWhSBGuzGpsZ9B458Z-PjrazovwXcxPRxqGTHPd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
