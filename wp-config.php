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
define('DB_NAME', 'treehousDBz1ccl');

/** MySQL database username */
define('DB_USER', 'treehousDBz1ccl');

/** MySQL database password */
define('DB_PASSWORD', 'f9Ilt5DPox');

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
define('AUTH_KEY',         '^rU3uqM{qP{N[oJ>oJ,^gB^gB$9-Z5-Z51sR:sR:s;uP]qmL#lH#hH_hwR0soJ>n');
define('SECURE_AUTH_KEY',  '@>oN}rNplH_hG_hD_hC_dCbX2uT;uT;tT;tS;nM}nM>nI<jI<jfzU0vU0rQ}rQ{rM');
define('LOGGED_IN_KEY',    'aH}sR}>nJ>nJ>jJ,j#hd9~Z8-Z4-Z4wVxTP]pL]pL#lK#lKjfA^bA$b6$X6yX2D_d');
define('NONCE_KEY',        '2@cC@cC@c8@YU0rU2tS;tO:tO[[lK|k<iI.iE.ie9+a5+WzU3vUrQ{rnI<jIgG!c');
define('AUTH_SALT',        'M32uT2uT2uP;R}>nN>jJ>jI>jI,_hC~dC~dC@d8@Z2tT;tS;tS;tS;]b*Eu.Ti2ey');
define('SECURE_AUTH_SALT', '$P*2ey|Rk0Jv>V,4kzJY>7n3Nz}Yr7M$Mcp~Od:dsCS_RCo~KVk1Go@KV!0Zo4GV.');
define('LOGGED_IN_SALT',   'fr^Qc>7juBMy<Uj{Any<Tf{Am$ET${4Kw|0cs4Jv|Rc>8gvBNc>8gvBRz>Ug}Bnz');
define('NONCE_SALT',       '4Js!JY!}Ckv8NY!}YkvBNv^Pam29lx_Oa#29KW~]5dp19Kt_]Sdp1Dlw_KVh[5CIT');

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
