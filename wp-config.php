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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'andrea' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'GT${xD`BV`Y69^$Uz]<fUP2!/b?d8b<e~WZj9dyDW|Xe?!DK%K3n#H7CtyuA k(e' );
define( 'SECURE_AUTH_KEY',  'GRH%VGg*{HxR5XbQ4zT#&VC/J0SFAg4nd_,jtZ`$=??1=~7+;:ph?ETvux?k3B|?' );
define( 'LOGGED_IN_KEY',    '+Yc<opLJu^P`aq_4m)j88,(.MWh<t<Wy)vX5/x[,6@W0vU8@1uI8-CVQq{^r4(sk' );
define( 'NONCE_KEY',        ':`-!B&2gA+/^Bv^JbiH[sH]}|ldN=d6V4AUb:d.p,H|S>ps/^!f8N#g9(LIUT1#D' );
define( 'AUTH_SALT',        '(9{Jr}ep=W5]UV;@il)2[Ct&RMpy!)xx/LCIu{L{x.c)g]SgB<*zpe@`2e=tf#wl' );
define( 'SECURE_AUTH_SALT', 'b^hS6(}f %;e`:$OZE]lQ,JC).C*{77~vY*IP-e#tN`|U5Bh6q.b3:saM,,37vp-' );
define( 'LOGGED_IN_SALT',   'QTu8iJNi-M?]M:^}(jKTR[CW&~<..s@3btBEX#2;/{y[Y>xx5#pIhk!Rgf+XJS_%' );
define( 'NONCE_SALT',       'bm-YZ3AxI$%eo>!VhU$sd6*<:.QS3mJZGc{=FcLc1<L-!+~3A3p=n?^+p%)7c[pB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
