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
define('DB_NAME', 'franklztas');

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
define('AUTH_KEY',         'G?Zf@9<8C|gYH7p{FCS>F_!>p 0r;|-isuO-nCo3t>d%YAj8AO7eD=mlD^<QE&67');
define('SECURE_AUTH_KEY',  '@qA=* bIV?B~ZjcrN%ziU]o@R6Ef6-3Kzyn9+m8g~5pQJeouu>x&I0U0V9[vv+es');
define('LOGGED_IN_KEY',    'uo)ChKp0Pe$MGtG9B7n96nIfyc}q|m[Ky{3&:BrjG8;::mDA*M~%=0$qHEU~-~Bl');
define('NONCE_KEY',        '5(3Uhm ?aSn|7c cR>QfeUAxS~)rnH%kW{;#42LSw-o4kCa4os[Ytg?}_D<=Dbsj');
define('AUTH_SALT',        'CO^w9D(Ym!@x}E0^Pz,m4s6>|u,(5Xj.$}|OOmzj/nQy;:-IZU1@VF@.pYhvKYel');
define('SECURE_AUTH_SALT', 'DM4fkkQj!Wh4SzOVyR)h.?v|%7%PceXG~Bmg{krNM<rNsb Q1R@9<zMNi|Fqzb!)');
define('LOGGED_IN_SALT',   '%%g8yq`7Exx/x>Zi[Y4a:u8E#R74P&?+=9)]OK:r*7YS=#_Eb6ll;Vm_1GqTF@P(');
define('NONCE_SALT',       'ShEQ0MO-vk2HNOhY97~QQk. 1hyP$h 6oMZ#Gi{A383BnHhHcz7p*UO5-mj<oULG');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
