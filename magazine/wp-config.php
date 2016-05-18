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
define('DB_USER', 'bxzDPfYPCo9SM');

/** MySQL database password */
define('DB_PASSWORD', 'Rosp1Elj9it9Ce');

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
define('AUTH_KEY',         'T~]<j:6`Q$C_:tC1@4mzPdYiWN+E_9DG4#@tw910|%14E1qQFHU~jN>,y60QQk.S');
define('SECURE_AUTH_KEY',  '@B-bCtN5M]6m(#O=PSo?=2 @vODRIvAxh =ka8C2o8N!lXQZ jm,B O%%D&,Cp5T');
define('LOGGED_IN_KEY',    'cQE@nLzyJ8~=CV ~:dP|rA!TlHM#z8>q[/Ioh:32=g2RB<sQ;Qa+msYJn1D4u_Q^');
define('NONCE_KEY',        'J$-{*0y3>4GBn2z3P&ULo,lEz9T0u|(MDA_t]L=<umBL4`v/+r5Y0,+b5_c0b2Ch');
define('AUTH_SALT',        '*_8-f+T+7^IT*Y`a(+;vIr!:-5U|Kxe8k_#]RA[c-,gkFS[Cwtu5$?dF!DNK%d}j');
define('SECURE_AUTH_SALT', 'b2#R+-CW.@V*zB@III5s[rGtSUrwbM1=bcy.NEMoqhKb(5+lOT!yi<`K&x(g&ANg');
define('LOGGED_IN_SALT',   '&36[%>#8ZAN^XKE2`1FGi=vf|9Vyye>O1(dVNW|fFTrf])-v6tV^opAyqDD^E:2:');
define('NONCE_SALT',       'p6CukK[Z9;:H,Wi<x#%5ey}=2gL>HS`e]PA(JSR>q#oYQ~Eahb3EA0PTR_^f6|[]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ymag_';

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

define('DISALLOW_FILE_EDIT', true);
