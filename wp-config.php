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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bcbs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'gQ9H);D`=5T.Ga9W(dcP:HMUq-R}^-f-%(Fo-BPBr?c}h]D~-f%TS(1(U|@U x3{');
define('SECURE_AUTH_KEY',  'a]u&AU^bkUN-lDz ~txv={|u;j8(iX5G3U?ua-qype=ZM/+8n$||!|YbR0!kD]HX');
define('LOGGED_IN_KEY',    '+vxSFi| _%??d?A?,78TnVCsP0T9@YXPcGq<${k6.yf0FlL<`li,Y7>~%xdweZ$W');
define('NONCE_KEY',        'Y|c,(~Z@yDMM5IIlJD/|x|)`T&-q^${e^9*PEI>Ro#Kr|sboq:&J{%gQ=8Edd,Y|');
define('AUTH_SALT',        '+o[.S_q,>naTd.uV@ C=$GQt2+V j<S<VN*+$tqTY(fJB``jHd{omfa|q1zEBnI@');
define('SECURE_AUTH_SALT', '|LE|r({=gCS6-+ZZM|X+W+y,hY0j@-f&8 joX|`Cbs;D<smh||Qpz+Pp!)ea6Lc-');
define('LOGGED_IN_SALT',   '/29a-<L(TE5)|`DsODUqA1.a1ZE$Y/gx-fL=P#+8!iN.,Km/;^,=uI*E|hC-e8>J');
define('NONCE_SALT',       'YqxwJs?Dz~^-3O-MN*|cT6?/Dj[L.Px38Tf.8%t{Yel>Mi<60b*h{ot4l)+~T}5f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bm_';

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
