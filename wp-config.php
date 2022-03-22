<?php
define( 'WP_CACHE', true ); // By SiteGround Optimizer

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
define( 'DB_NAME', 'dbewzdfu3vtg81' );

/** Database username */
define( 'DB_USER', 'ucfnnwqslggco' );

/** Database password */
define( 'DB_PASSWORD', 'swxnjych4jrb' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'U49ve MPX]e{VRbwnML1P?dVla29}uTV4Q*S|G[4iS[mK/n2qp bB<^?q_pc?YJj' );
define( 'SECURE_AUTH_KEY',   '(Gzwk<0B#[<pOcvVw*VxT=G[ID+.3d-eO)Wj[]fW~#^R6)otnvWa1_zwS(Od//:g' );
define( 'LOGGED_IN_KEY',     'cw2;JNnnhkB8S.gfymj^ NMgzrU5kcb*Syk$DXQ&@lvVMNO5..%aTj_$(u` )Jql' );
define( 'NONCE_KEY',         'VL3i2&brK8Wsj-LjW{N<D#QST?xSbip7E3JV#T]7bbseL;-Ml8Yc$qiJmQDm+3{(' );
define( 'AUTH_SALT',         'w!$OR}sPkBkjG*NjrI8ngk?KoW_ebCgB9z95$Hb%^~uGES]A-5wY2Vazns#9sxE3' );
define( 'SECURE_AUTH_SALT',  '(Pr,^C3vJ&;^My_UfC,D^5ng?2Y1l:M2NMTt>b2-=q0ID^QPo8<e3:J6|M%IMw2j' );
define( 'LOGGED_IN_SALT',    'v)iCK.K{U;XOYI6Zg4m(?mNJN_mDs{Po0UU0|^o,j7V4=+-m-mu~VYD,#y,*tLMS' );
define( 'NONCE_SALT',        '+LQvnFi-4Iz0#|5OdCqVA6seam}{S>J!L@4RW}RIOa5aF1}4)OUYr1_j9wjLi]2y' );
define( 'WP_CACHE_KEY_SALT', 'T!^CMqcyN./ lLS^oQ!AeFP$~?(87A}LSM*N4$lnx+y[)7gI/<0)RYz}Ugy[FBT|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ubw_';

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
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
