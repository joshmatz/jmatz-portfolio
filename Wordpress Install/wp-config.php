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
define('DB_NAME', 'jmatz-portfolio');

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
define('AUTH_KEY',         'I:%Eix~Onxh.Tft9J{|:YtQ}gJJlQWjNs~&={iYcoWHiX|#A9/Kej2wufEFZ|Zvd');
define('SECURE_AUTH_KEY',  'Ai$W:_FB3J7zCK(,+DT?GuR:O8Y]x!%QLl3yu}t.?yVl;PV3e>Uj Jai;v?O0~/l');
define('LOGGED_IN_KEY',    '^Df>b>v4@pa@?J(4QCZ:nbN,vr hm,icncufd9=bmrcCXx^*)$swi512YVid.)I9');
define('NONCE_KEY',        '@$@t|+Yeq9nc2|oA+7(X|Xy S&_!d_:|4_mM&?fYt6qh4b(]@q*[Bd.*1gCe6pmJ');
define('AUTH_SALT',        ':B7B@iN-X8#O$ya!h=bbBc>X58/HS~.ZGcg*U./EK3C/?(mgY27v=j&iAL^g9;Cs');
define('SECURE_AUTH_SALT', 'p{]`G8?hYeNH`oCyXw7Orn96bK,YJw.g~#EJ@Ph`AqB`?]]/H fe -e$bzx74)F}');
define('LOGGED_IN_SALT',   'TAo_P>rPmK^b<#L3)&]Ni0{BcAZb^C$e[V}56kKo/&*u]_{4PH$&4?+[>Jz@OQK}');
define('NONCE_SALT',       'ZbJrArez)9q0}9^UXr_y#pyAf&T`eBSBP2uN=s_x8?$ZeM3`Ba?VV=$}IPaHY0f$');

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
