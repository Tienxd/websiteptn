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
define('DB_NAME', 'website_ptn');

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
define('AUTH_KEY',         '2NMtB0KHLjmN1-d>`VDmRd8#?o42[L;0dlSUibIn,V$E2u~y3jlp5&ee~F`!P{2q');
define('SECURE_AUTH_KEY',  'u+?8||Zi+~W~18Gr8{v#|}9KlGj?|ab@Hi#E]w0-3NJN`<D&v_u0/mq^MrP}v[-!');
define('LOGGED_IN_KEY',    ',f+?ShC]p)NyDZ.+__gE }g&/j^190@zVW_9n>mkPC6Y#?(Ez)m8&3Thtxh;V.Tz');
define('NONCE_KEY',        'wguLJio{Y!b-Iq`Zhe >gTo-Jet 1xPT6;D/md$a$Ta=JTI/7:>_L2men_F-q}-C');
define('AUTH_SALT',        'p.Z/=N6:QD+j+Eb:i.FVVPIh:at|HAv:q/W8,oY;osh~73lNPg,1:,PMcBj(bT0D');
define('SECURE_AUTH_SALT', '<j*n.@xDg0L4+%JLqP@Ez15 ]qWqR![Hbh2jopkF,=83EK48Th:q%gW(J4l7)Uqn');
define('LOGGED_IN_SALT',   '*z-yShB-qQgzCgTQ|i{3rFS:(4_$2Jrb2MNXmu{4Z0`D{u,2<uYVBv6>QGj`v9yc');
define('NONCE_SALT',       'r]LJzJ||CH5MCaF,}&5w|{aU/fOS-sjDyD5F;}dEBRDGk}3,%B>Wyh26^4Ppmzmu');

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
