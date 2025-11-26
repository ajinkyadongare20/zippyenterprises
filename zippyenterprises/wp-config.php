<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zippyenterprises');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0 
 */
define('AUTH_KEY',         'X{X5VQDbx1}C8s(Hh_g<pG{_6glh[+c^Z{_,&5S>dQpN2^=F|{j<m4;fR6>/fcP_');
define('SECURE_AUTH_KEY',  '0UvNm=^S^x/KH-Fe=)`7`3IC}k^X,]APQnT|r&q]^:<m:zGH`tVw.&(XAV!&I=Iz');
define('LOGGED_IN_KEY',    '@8MR3/MEAQ2OnoFKFen-)P5$?r[ZEHekR$*T5S-st/=Uyax5|Pw1:AER t_K`1ib');
define('NONCE_KEY',        '^Y.QoaNg1r{i{p??b],Mqn]I)`r#k>X<]JPft5# q{x&Avyo:({N8r(-?c.|Z=zg');
define('AUTH_SALT',        'g~Ihe$#d.LE%pw]kCIR!Bm0 ms%N//%Y>qaiV]^?6px:b`9{lJPD)][)OyBvdc]b');
define('SECURE_AUTH_SALT', 'F%(1L40lt B>^mV8A+$N3k~i?x_b/JKI Ar/u9y,zl!6bT>1^3ZNxDVS8X3]P=VM');
define('LOGGED_IN_SALT',   '0pKxf6lHfA,zt,jBrg@4D+ax+~HZv?d0% *(_|@urj2gUb,.V/c!Q1VtA}Qzx4KI');
define('NONCE_SALT',       'ZTdczbJF[|{Zb34G^qFc:ZzMH.t!~$6BX>v5O)U}].M+A7l}V}oXh`79q=<`2j{0');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
