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
define('DB_NAME', 'legends_db');

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
define('AUTH_KEY',         '~&UiT`>j7#Vs,oA_3-tW/Ts:W,i|$}Iq(x5ra7D[=.z)xR@~UVfpN2/~SxYbEsYK');
define('SECURE_AUTH_KEY',  '>w !A$tG N>MHxL/)a7GE.$__F;?M*&:wO68qwk0P+8sHk>RgogW^te V${:A3cm');
define('LOGGED_IN_KEY',    'w`2?,xC12iL*n(.4AiMF[>%CD$4+-)T~xE)I$]99?3FwxvJ@k`;8o w#h]9q0,i2');
define('NONCE_KEY',        ':nI_RW-#}:.~; Z=&1c&9Wu>d=0|hbvOY]#6GEJib7Q+~>sp7iGx08^B?P6Aj& :');
define('AUTH_SALT',        'MT}e2*aBh)%TG>dZ!@X+{AsVvTh(N+zRS#Qqh84gwy#[rlQnfu#U16^MUu4s4XEM');
define('SECURE_AUTH_SALT', 'pd=DBT`/r7w?.,P4a99.smF1p,c8f|}Ubf^dS,`Y3R-AEYoHm@,^18=ZhPIHzhEF');
define('LOGGED_IN_SALT',   '8tDhvJ:>@Skl(/:GqZ^A-7Up|?`4 Q3`-Kj$mb;6djOh_|N;%=}MQDT;V,$<cA,.');
define('NONCE_SALT',       '9Mj%NQzR[oAb7:$4sV^H@Sw+;9F.xfbrE!z_zvSG([oyB+ y~h+K1o4Hzh#yYwQ@');

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
