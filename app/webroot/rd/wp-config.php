<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ruchidoctor' );

/** MySQL database username */
define( 'DB_USER', 'ruchidoc' );

/** MySQL database password */
define( 'DB_PASSWORD', '!gj1hm134#$' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ArrYCC^cOEM6zI[9N*R~c_}q@6`&!o*N|NKkI[|3-l)|KRg*?;kRJGh*6+IE&?z)' );
define( 'SECURE_AUTH_KEY',  '0!iD!RmE[28<+KgRT4[4Rf|=u_<5p/yMaKpg(,hz44B7)z8*VvMC+@FGRXO*~jIp' );
define( 'LOGGED_IN_KEY',    'cLp+QA[v{yDPn43*s1_*/=1E4t-A>ES%OmTK7xXCk!@!?%9T<h%wg`TKjsPY,(+x' );
define( 'NONCE_KEY',        'Y5l;:wxAZK6r%%eh4dAS*K<*!?+}i$_O9 UNgr]s0&suev}a3IubK142oF=::M4 ' );
define( 'AUTH_SALT',        '1~<Sa7tB+p!hW^?i>?MKd,jQN#lm2PU<PBB;FK=})_t`kBGa*C`n2{Q ]RTigQIy' );
define( 'SECURE_AUTH_SALT', 'uF&;T&jN-+2t&5`YxE%(,.#K1Ri!rm$f 2*v#I8IIZO8FQWjm*@rMNuuP<-TWI@b' );
define( 'LOGGED_IN_SALT',   'L&a:=6g#2>Ot=ZmGHFTb#D2.wdmUDhf$UNUd8bJSU-`SU^k:.oxOTZ6g]i~g55`w' );
define( 'NONCE_SALT',       'd%|iFEPjFb cMXx7naw~5W$,g*,I/dI89SQ6@7q%Y_Dc*iR5jDE#hiu>c Vdu{.y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
