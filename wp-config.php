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
define('DB_NAME', 'mrosenbe_sce_forum');

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
define('AUTH_KEY',         'T]VO^Wr^X*b?5P|J&VBl,1BQhc$Ns2a)U LCq&lQF#RT4UNC(snrTee0N?c3IuW8');
define('SECURE_AUTH_KEY',  '!d9kTbI=kVs9DS$Fe%aU r/dFY?g%An`^N~vj<cL9f$IwbJe=0p)3q,PxfQ7VhHM');
define('LOGGED_IN_KEY',    'NfkqYq#N0#_J`a:`fE%D<YBEfpRNgyVQs<jsPy3NK&<U3;+zch3G?`E~[cPeHvx(');
define('NONCE_KEY',        'b!=$fqPk=w&UdTj?G{%2D)AT]=14!~=#x09?b`)[Vv9[%Mi.=w?e{[_FXhrwcBvu');
define('AUTH_SALT',        'n+[:#C;vg&0{]?celfb`d~pk.~bW&O(LhU[KmA5#THrFA9k$fN3cNvT`|^QB]0Q=');
define('SECURE_AUTH_SALT', 'c*q1$lg}v$x4{zzZ2*$!Avzz&:[UFY!$<*REJm4V6dbpQ+9}9! 8azx,/tz!V;p`');
define('LOGGED_IN_SALT',   'tI`;*P&~Ib R?$fEZjfTo9$hsJFY_:f;l2CSXI>4/L>/&1X[#c&Y;4Yy1J-ZpIEV');
define('NONCE_SALT',       'su%B(xi 8i(#g|Ue|UFPhcL5vb=9*hFhn4kVK27tZup7xe@K8QYTgl(}29;gxP&7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mrosenbe_sce_';

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
