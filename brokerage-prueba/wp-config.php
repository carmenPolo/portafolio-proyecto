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
define('DB_NAME', 'brokerage-prueba');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*jxA{Qk:r>OtiV[Pu+M^u5{t1Ti2ojcW:*}tQjeU*EAx<zGmM?XxL9M)y*H=475j');
define('SECURE_AUTH_KEY',  'M9Oy4Th;WmlZk6rLA9/8Enb4UH rJ%63(Zho:!9;A{:+E>S{&-e,/Ne|SJnwBh!)');
define('LOGGED_IN_KEY',    '8vX[XdC1]l%NX%WIO#&8`u,Wnm25Z`I(0w7na~@BpC1?NGD#^nel] puY5|2W.8l');
define('NONCE_KEY',        '*B[4^qd|}o^g_7{U~YG%Egc2]k2^Eob92<~kN$hzH%J`M#?Jj))X}R^b:@E_eD^h');
define('AUTH_SALT',        '2Y]ii3zKmdpzv9l(l5jun)@ ?zTBr[u{<5(:#`R(z;(A:}hR@SBo)_?|$-wi_R6D');
define('SECURE_AUTH_SALT', 'HX8f-q9-D]B_O.f@}z*M^ac);tc}$sK_F[JIS:0u?`xb]gEU6da#<,V,#eubhjI}');
define('LOGGED_IN_SALT',   '8)e[$h3P1V=c8ANE}T?@+r1w)d+ZGWTFMn)Y5M*52xc_Oj4pVLj*ZLT3<| 25g6C');
define('NONCE_SALT',       'eVB#K<4W<CLz,&D@W{+^s|{E >Lw?Ajd=+TFy^g$xgqhL:7ZDc=+h$VQWHXvuR]O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
