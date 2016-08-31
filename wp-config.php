<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wmo_db');

/** MySQL database username */
define('DB_USER', 'wmo');

/** MySQL database password */
define('DB_PASSWORD', 'Micku0226');

/** MySQL hostname */
define('DB_HOST', 'mysqlsvr');

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
define('AUTH_KEY',         '}0mfws=|,N[A wr%|%-b)^+)cP$J+3lzHO)(qROJs{KsKE%#V9Hu]2{f]#6~e:3S');
define('SECURE_AUTH_KEY',  'NUiiU*/dr{;:IcxssV~oEE]h$52}EOzt<IY/_<(E;EuQSoTv!;;AK8BC*QfC=<wA');
define('LOGGED_IN_KEY',    'r8<psW+Lty7Op2~nPm-WlFbU!7=n##76K0?(;c|u1b+y^@#iq*.KHe lmRHS sx8');
define('NONCE_KEY',        ':ju:s;y^V]DzH6Nus( o>1+fKC4H|as2[7/S`me.,w%+:(0c$mMD*Gwjyd/[uWst');
define('AUTH_SALT',        'I_s,&sl_+KYQ;E%AklFU{3J5n.v/boh#Rg%;x6mP Cg$39Ut}B7`A<j>OQ$0kA@*');
define('SECURE_AUTH_SALT', '<y&LbTDXMVe;>;y}([VUG]s$jj@QOs$2`kF%2Qu$*;oTeBK5]W.F-;E/8L2Jt9S1');
define('LOGGED_IN_SALT',   ',RKp{jo#v8a&Ad?{o<8D6CG[{R~9jK@z-6N2K6VK`sb^sDr8sMr=);C36ogK(PT ');
define('NONCE_SALT',       'afYrA7U]Dg1^`iX>b0`1+jst=3-|<0Q~iWgOr9M~HsW_,gLo=R3kTnCJJnD_0&Zi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_MMP350';

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

/** to install themes and plugins, add this line to your wp-config.php.*/
define( 'WP_TEMP_DIR', ABSPATH . 'tmp/') ;
