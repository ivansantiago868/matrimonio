<?php

define('WP_HOME','http://matrimonio.space');
define('WP_SITEURL','http://matrimonio.space');
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
define('DB_NAME', 'matrimonio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '221590jho');

/** MySQL hostname */
define('DB_HOST', '35.231.88.245');

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
define('AUTH_KEY',         'zM,p6RaKL@X2pG ]*&)hPV~&!-5O(6c;3U4t+=T~ aj4i^n,AN |1NGj+<|Z5UKd');
define('SECURE_AUTH_KEY',  '!_+HX$9P)JuC0$=9@`]*O/|_jhmw^rkFKw.grmk .9%hN_E@(U=g,;J=D0:LNFI2');
define('LOGGED_IN_KEY',    'N2S%F_wL)eXF|<m|;8Qg*}XIUB=T=4tB}Rf(sj2-z1$;KN |(I&)5`_<]eN: 29g');
define('NONCE_KEY',        '6bf&C:5kM$`*~&&AB{Iv,Uo? X:7eZ4<^F,pA#QGC%-/9&E_t~(O.,~sDdkyPsUc');
define('AUTH_SALT',        ']ALgEo&i?])FD&ZS-u[8_*!Tfl$65:bFiH<`AJ8!K*cqs~0tenWfrVO`9;~j4^N@');
define('SECURE_AUTH_SALT', 'btBTLU#ud#|/`Z,m)jgWoEpRmZ8~V`=U}~3Ki^2:K]RPnb`KV{%Wqk:bG/@%WHWj');
define('LOGGED_IN_SALT',   'P=hU|$`@2t7ZPL^)C6a/.vS&Bi u&&v>~-qx7-otW8H8R]>+E#/fUjsvn@BKFtj ');
define('NONCE_SALT',       'qCaeg0$6|7]R.{TCTU@HX%t_Dtk>(wM/erh71`Y+=ekkBkZcir Jt~<8*;UToEqa');

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
