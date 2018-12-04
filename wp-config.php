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
define('DB_NAME', 'carbonf1_bgc_dieppe');

/** MySQL database username */
define('DB_USER', 'carbo_dev');

/** MySQL database password */
define('DB_PASSWORD', 'Developer$');

/** MySQL hostname */
define('DB_HOST', '162.249.5.4:3306');

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
define('AUTH_KEY',         '/XF]/>+nI@__$n=a<gcK^H8;H`F=daeF&|XYSI<9mXY+0/2xxumqQ+6*4TZTgY0=');
define('SECURE_AUTH_KEY',  '!j~)8SyK+5K@6 #%Tn+,rz;Q<Tpf<wg0,QwgVQ<l1~dfGz[kN}0,vFRO=daRW@#d');
define('LOGGED_IN_KEY',    'J%FUchrwT=fK2w%J6Yabex0e=oI7D[->P;{g%In#HP*aVam$)u5%f<D3epI}!a>(');
define('NONCE_KEY',        'Eh/Ge#B@%b#z(e! 5vqmo BKRS;%b+y[:+;Jv]MBg:{rD#(st;o)%-L0v;eF@mdZ');
define('AUTH_SALT',        'kPCOB/:BD%&nLO`H0E|k1Li|6>1QoV<1Z9X s[oL&(HR7vxCBG!Al6do}&D7I4s`');
define('SECURE_AUTH_SALT', 'U[l@(0;QWM|.O.ms(+&tV}E|O:Me+3l_<yFl+&)~a&g6/j6s.m$ /6g,F%>9PKA&');
define('LOGGED_IN_SALT',   '%`VK}S?04{GLb!7=P>I}kMdfcp)Z}3~|IGqj~[,WBW)q[x3P/k=]Bfq[VA|-f4^W');
define('NONCE_SALT',       'WD*%ca,:,{o8-wq:`XJETqh!s|M-9{((zV(bxuEu?iOC,XwtZ G>fuoeXfx$V~S$');

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
