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
define('DB_NAME', 'portfolio');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r_m5oMjEfM5z[>Xab>jtxvNdQ}>Rc_DLA%iOt87fNE=5OE :z%-vLcew;5G9a=}.');
define('SECURE_AUTH_KEY',  '7|G{M6H|HcC2BXWcFTO,#dqjcqKwQd|JyO~b>WATtaS ZTWQ|rS3y^0)H)[(.Vs.');
define('LOGGED_IN_KEY',    '>C9T|CK*F^ND>R22sLnSb]t`rq% [oDJxyU#NhCr?Jt4s{k8cNFbFyQ,2*{Jlb-L');
define('NONCE_KEY',        'y]>]Q[,iz?fTuGTbq~1Rm[RaT8#(V9+,!@rttdkuld^od b^b[Ph4P51YGBwZmc>');
define('AUTH_SALT',        '-0w)tLYuZ.5.O.U:Ajl(s2)<Uz1S0jrThMuhxg*|ILf1}3)vGFL#>sN=%2^:83x:');
define('SECURE_AUTH_SALT', '!a%TCA8zF1Q?]JE&T1Yn,:kk*YsumO[XEO 4B=ckP603*ZHmH/_S`2R?a*;@h75Q');
define('LOGGED_IN_SALT',   '&uj(g?ath2?cy{Yl$W)&.H&cBxY}1@{^T{`bB$8#hBbq/Y+e;&Yn[dknS.?T]y>]');
define('NONCE_SALT',       'L/+RI^.nbw9{mRLmqmkjQhWOzP&#v.|Mu)B`MgI ~nbovX=CsW9~lk7tnQlPizv{');

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
