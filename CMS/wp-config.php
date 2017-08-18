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
define('DB_NAME', 'cmp_2');

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
define('AUTH_KEY',         '[RM3`6NVX}6mW=Hl$)8.~{3tLY_Qs4/#W J|AniD2&?Qz@^u/QS @o{M~imqr&d;');
define('SECURE_AUTH_KEY',  'nOA()x!fv?>U=Cx$6QPX<|T?m?DIkJFUW/X3P1O6u4bKM77xcoUevwQOnmSp@(EX');
define('LOGGED_IN_KEY',    'q#~h.+((27+;CGP?T`|x}R1Yw@=;(Mp[YnP{SMyoEC2iX1/3j<_x~ wZo<$vv-++');
define('NONCE_KEY',        '`i79TZ>lh=/PB=D,uNMleJxd<;kgCszfgOSzlV.F |h#Y#5u6N)LIxhRd![D{Sen');
define('AUTH_SALT',        '5JMk:6.C^nowt5JaAcf-xvKO7?QOV1jH2(7lZ%1~^#B32%.~|!Z?wC8b37p9aV4G');
define('SECURE_AUTH_SALT', 'c>Zcf_G(UhXd426FTy$s!&Z&)Jw3uct-a~AzPz<jo)`Vg~4$hCq({YpM?5Mu-)HJ');
define('LOGGED_IN_SALT',   '8O$M8FQ#j)L)w|F1xHvM}E49okf[!-:Y]>EO;pS?`V>;=ITccRp;]}6X{Q+x/%g*');
define('NONCE_SALT',       '8$@/M7@/4/< ^3;Krjx0[XaI6joFZJb=;eO!_4oPO/iy-|.eY@N8I:^gtkFc}yS(');

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
