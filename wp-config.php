<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bookingbat_news');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '-F9^=J-2TTIE&$yia8hbSY,1V~5H}`JOg^!T/Aen%Qr@H~W-@}:+i;gjjqul-i+o');
define('SECURE_AUTH_KEY',  'r1R/pMG%zw,26OV>E>@ 5]A}WIUcCgXzTmL|-&MD tmu>a.ZzvM.~ge=c;wsb/h#');
define('LOGGED_IN_KEY',    'gS)oE&nt_)Mf_>cqeAq(Uh6=?hN;`K>y*Y[n7b,H`EU~]E|%}kWMtEaa2JG_I+~e');
define('NONCE_KEY',        'C6~@|<z?IbL=>2~+4|neh}o94|;=jL$@1wP0|>d{7+}/k^/%NnH**A1wK+&)oe *');
define('AUTH_SALT',        '4_zI}D7+(tNXJ+Mi|sZ/<X$`M#,cO.m R}l_tE&V$)7hG<xU#e[<MFX(BOM4ryh]');
define('SECURE_AUTH_SALT', 'S9QN_R12eU{{xNF~~a?}JUI9hXuF.{*7h~0G#|]hm6s2;S(a@YvPR}-s-|h%FW{[');
define('LOGGED_IN_SALT',   'k_vCftTTX|(1P:n_++/5D|.ExN^?),U*81H:V1|RCG?Uh7Xem?qW99fe=*<Y>p#P');
define('NONCE_SALT',       'Udg),^6IAp2|PWvMtY1+6QsZ%]ON&P(Q`Pc@rsP.eo6.m)}F9wK-;s aR(4W@-# ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

