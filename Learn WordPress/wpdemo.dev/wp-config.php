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
define('DB_NAME', 'wpdemoDB4zzil');

/** MySQL database username */
define('DB_USER', 'wpdemoDB4zzil');

/** MySQL database password */
define('DB_PASSWORD', 'SpN3ehVBsS');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'BJ>,s!YkgVw84GRJU}84>Jrozw!~KhVRh[KGCN|0:!Ckgsp~GCSGda_D8O-w|-5dZ');
define('SECURE_AUTH_KEY',  'qIETBQ>3}>4g^$}>Qrjvr7IFRNz|[4gcoz,QNYco40B8Nws@w1dokgwNZVNZ0C8|G');
define('LOGGED_IN_KEY',    '00YokZoFRNJk}B8}Bz>ws!KZds41GGR[40|4s@plwOdShd#GC8V_:[_1Z-ia+DSLL');
define('NONCE_KEY',        'myEbIBYU>3}}>F7f$v^yXQnjjvnB7UM4RJ!z0,@80kvovr>^JgYcUr3}NF80Cwo[');
define('AUTH_SALT',        'piSl2H;Iu*y<Tuq*+HTXm;]A<7u^yu^MniyuAMEf{6>,3brjzQcbXnQFUQy>,0}U');
define('SECURE_AUTH_SALT', 'Jn^wo|VNgZZRk80NGJBYR!80}|Csk!zoh~OGdVSKd1[CG4K-:|8:dwl-p9SODW]9:');
define('LOGGED_IN_SALT',   'v8N0BRrUgcr@do~-|o[8KG[8KkNZokzKl-#plw#G[5KGSGVhdoDep*+ep]9~;]9K9');
define('NONCE_SALT',       '91DSO*9LaW6WixtSt*;]p]5LHy2EALALHTiXieq*t*+]6$<73E3EAMbPbXjymyu.A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
