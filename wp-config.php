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
define('DB_NAME', 'gasnano');

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
define('AUTH_KEY',         'yQXL+ !hS7OKlOu5qyg6iQ7IO)8r?qz;Qu7T|{Cj&+(.%<N`Ms5C15K9iziRpD^)');
define('SECURE_AUTH_KEY',  '(D8NpF<F,auANDpnrF[`hCLvPl*_f&,7Do>%a0=}u-8j.B%%so1E{fVkTG| e`74');
define('LOGGED_IN_KEY',    '`Ar}A3!Lk2(!9=)0#SE7<)@wF{W*GZ%M5Wx-w&o,p.`w<{%a-6Z,VO.+Haz@zxv!');
define('NONCE_KEY',        'aC.WiX4p-i4s`uILCVsy@0&%34W3JNQ9hS2va)QC#@Nz5gvSfFAC;-)d:Ym(C q:');
define('AUTH_SALT',        'ioaj{pA~~Os>$i08?om5lzb&A)e],N%Kp0o_2=&zY~=Z=nIxLj+lBHCltDguTZR&');
define('SECURE_AUTH_SALT', 'JfWYOa@05lpKeUiU0kUc9D>tiPp;y^ul;~p~#aM19Fu`ghtw-`VXHq4Q@NOaAus6');
define('LOGGED_IN_SALT',   '[lOxtwD|Y*G6hdNx65e>=(GUlB/[;)2M9@vCg~%pnBSs?aw3$CQy%E(jDR,`9tH8');
define('NONCE_SALT',       'RO_veP^,-u8{h$ &PpfW{C?3[n}R?drQF,??96:0Y;*~tz0*i$L.j.9]oFjafYY+');

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
