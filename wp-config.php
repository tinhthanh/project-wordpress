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
define('DB_NAME', 'wordpress4.8.2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         's?yTp8m;b*->Y0(g%TY]3cB:m2E!X(BiP;KAPu9.+.-WQaBy,FdZcQSSjnu:GGxd');
define('SECURE_AUTH_KEY',  'Lt9KUtT%3sval]v7<l2S&5j3Rt8AA;#Eg:Q1X/D87,8HueNtow-F3 ]^@gc=ZCTu');
define('LOGGED_IN_KEY',    '1oH2hFzo7N.>aKRTOW !D`~tt1RklIKDi,#Gk(jZk.mL%;ck`q[-)h37tAbb+kR6');
define('NONCE_KEY',        '<{HF-<^[GqE2qQ8o!M#lHs-QVkRaDah+OAw:.ty${:p0jp]*^g6sp+3]p}eF;Ed@');
define('AUTH_SALT',        '2dVd(SxvCoO:MpDgO)s1$3B)|-@v{bAK@SaZ=E]f=Cm2(1HePePCu1oDOtJR4NY<');
define('SECURE_AUTH_SALT', 'AGETNEXu5H-jn.+`72GA|OctKo*&9{Z+.YJqT/#]_DKF+5e9U4agTM2gr]>?UZf]');
define('LOGGED_IN_SALT',   '9w^fejTR*E5/k>Z[@?Jze)!];)A>6Y9K[<B26xnC=&?Oa;nC..0)/NHzPbJ[mKCT');
define('NONCE_SALT',       't fJEZ^IwSkpMD.B=(0~an l~:<k]*$B)FHHP%36QAa)FPRL1:bc$!EQNWYWbzfk');

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
