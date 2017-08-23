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
define('DB_NAME', 'netsanz_acedata');

/** MySQL database username */
define('DB_USER', 'netsanz_acedata');

/** MySQL database password */
define('DB_PASSWORD', 'Happysanz!@#');

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
define('AUTH_KEY',         '$<-&1[2^aZ!dryR8JIHd3W*Qe4PxTVu=AO/K=TR Vr2imsU; /=D|~RH4N6T]k3]');
define('SECURE_AUTH_KEY',  'ZuSqhMM&/~)6Kx5U>aq20qQaQE%WT2_6$YW$y?5mh[p*gzmNFEo9Q[s.J%~P~ZvW');
define('LOGGED_IN_KEY',    'K@@yx{y}f(]Pw4wPv~e}Xm^MOiisN.kD_(^ ?tIYcvZ(TGt)5c+C[=x93kJ}W0=b');
define('NONCE_KEY',        'u$bbJEiOLUS&sdNrr483t8M[:Qypc=rQ4U^i1,Y`Z*f.lGz~:N32NT,HjNQ>(#UN');
define('AUTH_SALT',        'STH/-rl{N`$=#) txQ+P0eb8C=mDs0Dq:6yS/B]Jsw`n6C#Li]0wj7j$%}jd751Z');
define('SECURE_AUTH_SALT', '8m.Yx.KTX&.vn{Ls6VhPPj0gI@yxj(a(;KpcFwB:( o@=B{{cag>o/lhK:%Kh9ac');
define('LOGGED_IN_SALT',   '~_2Zw$RBk]L`UdJ0oOZ*HhL]_u|/R$Z bISxV&[kI=VZfN1-2W]&P|jCIJ6-&b&,');
define('NONCE_SALT',       '64h!dEk,q`E,Qe5;qF`g6x`xg+k5zcv;N,rbvv_w6`:U0&B#I9Wey]V$#(8aDqEz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'AD_';

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
