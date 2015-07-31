<?php
$application = getenv("VCAP_APPLICATION");

if ($application) {
	define('WP_SITEURL', 'http://wordpress.casrep.net');
	define('WP_HOME', 'http://wordpress.casrep.net');
} else {
	define('WP_SITEURL', '/wordpress');
	define('WP_HOME', '/wordpress');
};

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('CLEARDB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('CLEARDB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('CLEARDB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('CLEARDB_HOST'));

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
define('AUTH_KEY',         '+VFA<^Sg0fT[WT8hD_B|1j3E,A,=Ag~v|^v2|@Ta-jXAXJYN[qc+xH$GbHaBbvmZ');
define('SECURE_AUTH_KEY',  '>=J6>+6%+>dZJS_K+k-H03ukZR:M!^7)$4IXQ0Jdm#>C~N -@f/co$]dVN)zQ&7C');
define('LOGGED_IN_KEY',    'Bc_{:?cT;4-[{R%-ouZsCSGKP|Y[v/K%%P8(g9-n(X<d?1YF67%kb)_A-:RJ-iD(');
define('NONCE_KEY',        'u7(SI-aGX>;Ga<>M7~kK;N^,e:}T%-< 3?rUJ)+owH.;o|O+zNH2J1|e=?-Pn+Dk');
define('AUTH_SALT',        'soA|-Wd%&+ku@;t%r>|iM|5(Ls(+7l#}qR|QnP_}~|q.N-W!]oNiq|>C*+-Crf]3');
define('SECURE_AUTH_SALT', 'MRBw+WK%S7eVJSB=0NF:/sM|!c,B9~M!^8vTM<QzTh>|n{+S0_}]at/oCX?R#q$I');
define('LOGGED_IN_SALT',   'I[%cLRW=+[kCoq~~Zh9&dp(//-hKKj@.W)lp|If!E1mKZ.vWPMxi+*eWJ(pO1RFK');
define('NONCE_SALT',       'lNw[9IO<j_DUDh)U2-N,}ykp[=tql8;~?gOEUFF_s}Hc0B5EB]#/;4,tr}-_YL!7');

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
?>
