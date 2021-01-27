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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sportsandrecreationconsulting' );

/** MySQL database username */
define( 'DB_USER', 'limAdmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pMOlhcDMZhldU04Z' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k5,,J7eQa1gMy^X&-Oj}+n#84W@0$Ya%yh]`&*8xuQmXyA]S(2tt%T.B2 %}s*2%' );
define( 'SECURE_AUTH_KEY',  'Clsr^CUK_m)o$SQQ`;t hD=`^tTvZM1sm.d3XRsWF*WWC)o@PeJ4Tg &>]._ENji' );
define( 'LOGGED_IN_KEY',    'YCKk|[N@+75?=-%&&7Vs(j0O{:h78=`D,UVqv61$MeIA]<ut`|}DmD@GK*sVc}w ' );
define( 'NONCE_KEY',        ':fHkNX$S`z>|mw=egRlV-U6*WNL%+W!zQJxg~KTgOh$fBN7)V3MSL@i.9-H;).}j' );
define( 'AUTH_SALT',        'DwE}bzY0Ib5CxFRtnRjA?qH7I>94-P{qc0<s^r=b3-D/O}Kc*zT2M{<5F<,.=~fr' );
define( 'SECURE_AUTH_SALT', '8 eQS><VHLd}g_io1TspFOv pz:O0n%FCOZD]$5_E5to[H#tT8s}f]KcoqU<-7ch' );
define( 'LOGGED_IN_SALT',   '?W<J]_|4/xbWKStDQC5E.$AX@!N:kEr=b5Lq:vVOmKx~P0R+C*f=rEr%b5$P8pG^' );
define( 'NONCE_SALT',       '6eYc/4Q*#`zT/udLZN&~f/]OdnviN2Z}+z]6`#~P]7,<Ymx!V&C-H@,5p7H<G8^3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
