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
define('DB_NAME', 'deltakhk_wp');

/** MySQL database username */
define('DB_USER', 'deltakhk_wp');

/** MySQL database password */
define('DB_PASSWORD', 'khksuch1924muchdelta');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WP_AUTO_UPDATE_CORE', false );
define('WP_HOME','http://delta.khk.org');
define('WP_SITEURL','http://delta.khk.org');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XdM}E{qcg:_A&1H;Ve-f}59Ck)k{cu^`_|10,00XdY<JW]a;$7q0^[Opv3AM-d1+');
define('SECURE_AUTH_KEY',  'UMZ!*Z!}!J|0=.qVslL-!sdg=zVVyP%Vh?2DNQo9b#)D3 Ye81Jn*n4=xX$aya6=');
define('LOGGED_IN_KEY',    'wG60+[|L7tsHKue;C).^|zj-0x2CPT> ><IRtikrXMoU+pkNi9$fP?{VLHEJJj_@');
define('NONCE_KEY',        ')<G}/^*(>+-=heNcy`>*mLh^1-&;3Uz_X*{$YGUURF3IZ_Cba/C@;p6_LjIE^|;5');
define('AUTH_SALT',        ':6<G5+fV`T?E}D8G9uO-G-A<9S9;+op}UeSsk.:d}]=E{If+Ys]%q|{(YCx?~BBq');
define('SECURE_AUTH_SALT', '7m-CvRP1);Lz`5Q(X!MV},jZ=`-s.;>V/Cf-J5PW#|*5&--niT:A-QM!.)~Oj=5j');
define('LOGGED_IN_SALT',   'G5.KoFvx10.y|z2& Fw}EgW0),G Av4sO.&;r|{uJI807e/i?:Y&L%EV;Wp2%9pp');
define('NONCE_SALT',       'J925ha3S)1$iq}hJ26EC@]7W 1dB7!l|3J(Av2m!!:-Ah8T}ibm;G70g,A|[S8a.');

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
