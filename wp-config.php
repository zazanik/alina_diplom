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
define('DB_NAME', 'clinic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/** Defining WP_HOME and WP_SITEURL */
//define('WP_HOME', 'clinic/');
//define('WP_SITEURL', 'clinic/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd:}[X8InyFC3r!zE8odI5F@C9t5a]wieUnmG$?ZVs,jv#v(|^JJUNb2:*|$UK$%y');
define('SECURE_AUTH_KEY',  '@eP(A@qsWosRa&L~DhKK:0oCjv}xM*7|+Cd-|~3MA-z~_)9-8 tvO_c-yo:{5MXq');
define('LOGGED_IN_KEY',    ':-nJU1TW/7GIk~t]+XX4E6W/%vg^USwY2B7tylDd-s>FBkBnq9DWL>U9UuSsC{8(');
define('NONCE_KEY',        'e--IEjSn`.fatPD)E[}@?e|c0R!*?;JY^B+Mn!EbFa1*r+4qD=N?k#>>R2YiC6|>');
define('AUTH_SALT',        ' ?&AWNw[Gn[G<1z0cBwacc^U2+lA~X*djgY|.M/nq*[uqr3D+Ly[/yI3+NSst,TP');
define('SECURE_AUTH_SALT', '6R*fdJ>(T7,X-A4DQH3tC^|_?(Ltuo9p=Y``LAzHG3r$y)}5PEE`k[yI6%v!EN)2');
define('LOGGED_IN_SALT',   'NakGZtVbP|<7RNRHQz|O#e}82Acl*>}V^V;`QD:(/R!)(BBX^G3z{1C$~Oz$gA1]');
define('NONCE_SALT',       'Lj^sVCH|pfmQ?dX6|ny3CDt@jREl~mVOKJc7u]=2a]q<MF:O{WAC 6tQ]H~UOE-X');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
