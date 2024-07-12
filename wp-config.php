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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'QWL>q2<yboN|Ca&+W<4F`,#p[1O*n)c)LEx{H1y5gr/Q{Q8_;@a>v1`WWc!LL,0`' );
define( 'SECURE_AUTH_KEY',   '@].@y_-/+X2=j`NH`><PyW[7e/kA}k%,4/2.%qPfJETEaD(PbVYpc>#{n$dEv6*2' );
define( 'LOGGED_IN_KEY',     'hM7OcuXxpDYE$plKt>mg#}6#iZR5l,>1kg0O_2b~KVd3(523/44>``X]*/rzmmq~' );
define( 'NONCE_KEY',         ',6Z ?7kmR^j4|dqUzOwYegD|x*c2?HXlIsWp$@2xo]<x+B2o ,<=U@q9.o=o)am9' );
define( 'AUTH_SALT',         ';#t9B5:n:R,/;)Gs7Y6f=`!-QD@jQHv),:n-*OWlWqvf~=z=J6(Tvq8}kZ10uYy!' );
define( 'SECURE_AUTH_SALT',  'oe*KArGayuKY$R+@u:Fv0!E^Re:_4:(v;RI:gY#($Q#^sb>#<f:-ov1/[P!1M^;9' );
define( 'LOGGED_IN_SALT',    'Yisl.f1dn_OR6lTly{i4a<rP6iY%+CumEjUOs6^YrB;1%vi[[oFN0iX5 /*w+Xgb' );
define( 'NONCE_SALT',        'bVf0w9BM5,<.a_r6HbwC]yr>>&ZwY/dnsvDtip=;F3|!&%#4;,A^&rYH*9ln-S2f' );
define( 'WP_CACHE_KEY_SALT', 'XH2r*MihiG}zhay28ch`rVSOG:~m]rC*XGlyP5^~kG~%3!en~j&sc.sBl>M8xJpw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
