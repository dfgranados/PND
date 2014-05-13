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
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/DFGranados/Documents/DFG/Wordpress/PND/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'PND');

/** MySQL database username */
define('DB_USER', 'DG');

/** MySQL database password */
define('DB_PASSWORD', 'gr18961');

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
define('AUTH_KEY',         '1ShB^>xMIQ@CMuI$3m>5SKB1m7;KP;BhN>l*Vz=G<9XU-h)Ef(6oOD~eW/YXR$t(Qs7');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'Jbj=w7NoPa3Ewr=6nfGXVMa;VREtT25W4ptdipSyrx*iD1Pl/a$xAWJ7kEWQZ\`77|PHqkH6F)-<');
define('NONCE_KEY',        '4@6!5uZ^U6FjC#pu-b8rZcz>KtkITE:c?YVaKm\`d\`V>Q8\`_6OW!Uf~wl73zc<k#4n2');
define('AUTH_SALT',        '\`7KKA0G|7f3)T^Jl-S7eG?KX0KO=FBbT(XNeTF$*22rT;C)rYsIH*M(pinK:jWoE?;pElKO^5B');
define('SECURE_AUTH_SALT', '0ElIf|:sme^NZ*YfQqM#TSiAZexjehRM)6Z6zkmNWPRWNZQ)k9Ht*N=L_7^XV|>|1!#U9Q693)');
define('LOGGED_IN_SALT',   '#z>_pKA;4?>-vlT/TbdIaTLP_ODI;dcHa|DSV33xmGkugWtsm9zxOirnowTT8DZI_\`J-yhFwbsy8');
define('NONCE_SALT',       'hnrMoDE)Rzm<Sy=pP/M6VNF|oW@TGI2Ox?4u$ff0G~eXa4lam16hKyiM:C(GjtnKjxwX8yQ1');

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
