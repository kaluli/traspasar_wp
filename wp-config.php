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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'G4vfXagfP^rwL)S/-k*>4j-?*~tsLR=+[}!!mn cI{*%eX,d1lNVa]pD$j|+YR=l');
define('SECURE_AUTH_KEY',  'X=s-=g4Lm4mcC,#(e{j|%U,+|z )|(I#sIa-@D)ghYy,;z##gT-J.]PpTWI4.yw=');
define('LOGGED_IN_KEY',    'Q955qy$Gik_-k$dO=XG~d~p-QZ:A@$<a[O7(3l}v@vkCOh->j1Cf[WgFmPMx+oR/');
define('NONCE_KEY',        'Fu2(0)Z--Qp1/.yG)a7aF45/U 37yL8]pJ4^mq=q:_mKO!Uvk{Zg]g=$+N!V;]d1');
define('AUTH_SALT',        '| 4Dv_XCSk8865IctSo$_8yW>e%K#]ObDiag:ZTemQfK,*CLUjkiw&PIDxi]yY&$');
define('SECURE_AUTH_SALT', '~RXR >GaDf`DZs?z{IaN8wXV0<HwQQ;Cq6*Z|UUXr&:[+,]g@$>Pp#vj%&5<F5@}');
define('LOGGED_IN_SALT',   '?a>3p=IPQ|]X8u{wx)R!Ue$07v%b`X;(Sq!~D(SMui}U--D:Zjt2G+Ad0ench)Z:');
define('NONCE_SALT',       'SK+C4#InI-]w9i8#I$|$-W=/1ELLs+6V(|sdg5]m,az~kqs%7{gqW2-y~,=|$MrN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
