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
define('DB_NAME', 'db_marieshop');

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
define('AUTH_KEY',         'D|sAigoF4Wc;(w}v0MybY@:xZI/EGZm+Ua0nS(4~q{*CKARaP~r/?G,PM 5*[~3?');
define('SECURE_AUTH_KEY',  '%}.2OvuSAu:PIu7%jGrm@y@MH&se)8rPoPbd+qM+YY#c6TeL!2Tx}J559U1r>kHP');
define('LOGGED_IN_KEY',    '^k3fN:Yzsq[w34u/~2i8cDzvx*t+ko{/&on*jRB_]R5yrB&,JjHj|].*Cp8}}.xJ');
define('NONCE_KEY',        '/)#/+:?MZTs}ot<L*%)nZ9sa#6@D4e?th}EU+rlEi[3rlAfKk8Igs=7W!8)> /Fh');
define('AUTH_SALT',        ';YKx^_k(7j){E8x b[#ANkdKuaJ{qGktV1{M9NV$He*u@XQ9 yS(Di O!MKfW[D9');
define('SECURE_AUTH_SALT', 'K s,:8U}CyPj+Z7X(P-c`=UcKS!u>ffOEmtn15}Xso@8/6CtBt+UO1zv~air)8Cj');
define('LOGGED_IN_SALT',   'jc[&ENY5J)4daHPatsa+drZ#`[/uic$4[7*NY7h[!=B&.n[wc@Qz~T^KEdk~]sRn');
define('NONCE_SALT',       '|!YOnzBi]z3jhXU~jDgM2]P=SXvDLuEeqD??=ZLnF,n^44u14{9 1$iPE]r.Q6 1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ms_';

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
