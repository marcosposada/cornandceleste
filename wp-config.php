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
define('DB_NAME', 'cornandceleste');

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
define('AUTH_KEY',         ',cZXDI2(),3xrtQo[Oaa9IsH+T@kj?0I{{vZ~K_tgVYNuP1)?t@aVYdry)V=8d[L');
define('SECURE_AUTH_KEY',  '+zM~I#Iv(&Tszu}EINIl+A/^d8Y- +eYg){Ug(M.x1mXiW!;B5LnUS~r!Uia3F.c');
define('LOGGED_IN_KEY',    '[?C.e-$4Wx,sZ!@)YvW+G(tBUbkA2Tf hW|B@[rbz{s@E_x?Ig:(+|_3#=F7@WI[');
define('NONCE_KEY',        'cKF8[P(atc+kN+f^@Ce+_wYi``PfuI 3ajuodYZpOQdLvkUE}+(LhvKaV(i^.c>#');
define('AUTH_SALT',        'v_^ye@ovAQWcF/m~@M,{<afa(X~pAMqo{k:rgi&S[Dd%}&<jFN{^<!k,qW[7|~|I');
define('SECURE_AUTH_SALT', 'egj0+F;L0kBxXI~y>v@_.pr&T7j TrI}!r8(^BR>l..bnR1bKy9-d[@N!UqUL&SL');
define('LOGGED_IN_SALT',   'c!W0_u{I-.CPuA)Qr}n)/x-j<D_vW%D011_Y)AF*L$NP}G@5>Ww4lg?Q3>=#+/e<');
define('NONCE_SALT',       '%]r9BD%wkvSOc1Nt9-7-=5B;sZ)v~!{5A%u|:c=Y%t95`lTpx5^k5GK%{s>;uPh^');

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
