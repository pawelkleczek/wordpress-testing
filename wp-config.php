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
define('DB_NAME', 'panodmuzDBxdsmx');

/** MySQL database username */
define('DB_USER', 'panodmuzDBxdsmx');

/** MySQL database password */
define('DB_PASSWORD', 'zZirFLUWfl');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'E$IX<6m$qAT.y{eTm6;Hx]*Tma]Aq.PDW#9mat9S_2#Sl2L+p#WKe1#9p~Ka]91h-');
define('SECURE_AUTH_KEY',  'N,3gzFY,z>Yr7QFv>YQj3{Br^QfyAT.$fTqAM$u<XLf<Aui+LEX<A2i+qEXL+2');
define('LOGGED_IN_KEY',    'X3<XqAL+q.XLe;<Aq.+LeT<A;exqATL+;eWp92L+p#WLe2#9th+LDW#~1h-p9WK-');
define('NONCE_KEY',        'Z9p_wGdS_5:dwG8R!-:dVo81K-s|VJg0[Csg@NCZ[@4kYvF4R!z}cRo8}Fzn!QJc}');
define('AUTH_SALT',        'nN$r,Unc}J7n^zIc{,7nfyIBU,y{fUnAI$q,XMf3<Aqj$MfX<A2i$qEXL+2<Xqi2');
define('SECURE_AUTH_SALT', 'cF3N$0>Yrf3MBv>$QjY{F3n^uEbQ^7{bun7QIy{.qj3MEum*PIb{.6mfyIbT.6;ex');
define('LOGGED_IN_SALT',   '!kZ[Csg@NCZ>@0kYrF4R!v>cRk+t#WOi2]Dtl~OHa]_5ldxH9S_-:dWp91K-s#Wph');
define('NONCE_SALT',       '2+p9S_x]eSl5:Hx]~Sla[G5l~wGZS_5:dwG8S_-:dRo8:K-o!0|8sgzJCV|80gzoB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
