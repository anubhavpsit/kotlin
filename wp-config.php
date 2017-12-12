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
define('DB_NAME', 'kotlinv1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*0fWB6=!VMlIaTJ|Dc?|UAxm)Or!%DqOy2$QC[B(G( p+^a[Vy@KnwEsvuYWCCKC');
define('SECURE_AUTH_KEY',  '7,^zrEY:ajP+|[WgzEr$4EUS{COKSARDSC#UG<5@y^QDZ}{2Ng,IqQi?Q,!BN7~E');
define('LOGGED_IN_KEY',    'LL![}?sjH_h3:4.R5pDUY^@-lP22!SggOB~5={.2DgjAx/!k5t^{JBoG.x.)*rMh');
define('NONCE_KEY',        'o{JyBry- MP#i(WEwU|qsl3H;X0[Dt?5vI,{.mrh5K;M1FR(YyAh0J.R&OiHrzhb');
define('AUTH_SALT',        'Ls/@R$.Q4)n.2|YE;b7Whg;:ER~~$8~!S)p}GAmJ*HkqQM*(}4()#gyVb9fo3q`_');
define('SECURE_AUTH_SALT', 'a.P*j^@n,Wi(``#e/(&H) F5G/XR%:vjPi}QqEFc@^Eq=*;%?Em7Pd;_Mee?11$B');
define('LOGGED_IN_SALT',   'uwBNga2K#7g7,ekD#c+N@2@`OrL$HN[.+tjv<=*G 3>}eFQ ?Q<1vv6EtHZ}n(]r');
define('NONCE_SALT',       '1VsR32Zz/$7UB!:DbJd>rM7;#GDwic3r{-Ah8O+j+]&s8/6)*5F}+X,%=>K*{rz!');

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
