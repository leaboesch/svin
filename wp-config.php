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
define('DB_NAME', 'svinanniversary');

/** MySQL database username */
define('DB_USER', 'SVINAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'd6bp9ewfW');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

define('WP_HOME','http://localhost/html/');
define('WP_SITEURL','http://localhost/html/');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nqy&PUEH@zy|y G.V>1h(gyS~x^]toE*i=o$b[R!012Znhb|75}3tcBKSe|.0t(5');
define('SECURE_AUTH_KEY',  'Dh4=aY$c+Z:FbRcZ&N3)v.S7]]+Y)GwFt>I>P{G#R7=g7VvB^#3YiCLC;.W[r(|A');
define('LOGGED_IN_KEY',    'iR40sW(Jbltz4z6.UG*[ghl L@9-_y/<*h.P<2X$Zi,MvR=m}fJ*Fr*`pIDbHd}9');
define('NONCE_KEY',        '}5bHT! >*wJHJQ3Jm8Kvpo63+(@5M/wp5q1&wWHg G?l8gO=VX,i4<YwS@n5_6Kw');
define('AUTH_SALT',        '6phn+JpVQMmUAz; ,dXak/OnI(J>DG9:zAd-`tIGI-r|A5g#!g+.u^3)&Ei{9_Cd');
define('SECURE_AUTH_SALT', 'I9*hX^p2=XAWbQk(iiN@-[pX<F%q8yzM 82izs[8,mj/{CLac$L/^7f7V^piz]C&');
define('LOGGED_IN_SALT',   'e*V^OOL7fL(`b -I>3BmbpJtLi7rSLY|Kw=7H+#tVvg,pELv3uoS2$t^%|^#SK w');
define('NONCE_SALT',       'd>2NoJ|[F^5tM|1VEwA}NHJrFc-.K8pEl9(E.pb-[0~!Lfg=p?e)@u=bgqf71x%.');


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
