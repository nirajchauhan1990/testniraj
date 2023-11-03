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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'niraj_b' );

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
define( 'AUTH_KEY',         '1`ls1>^u$G{an7q_ %KQ(3Q97yoPPdxcL.{lYB6~[[1Px|<o-nqC|i.jX94k^`V&' );
define( 'SECURE_AUTH_KEY',  'Mxa#DV.lyl%T+Dt;}>dKO@P2r_dtSSNcKv%dr!4T!v]Ee~QLqatl1jFBWM-,YZ(8' );
define( 'LOGGED_IN_KEY',    'F,RX^-%Q]C~:e-.Ytq$1[&2:S;L/[/6aH:]n,ImzGSRrNh}xtY;,8Ihb<VDy **I' );
define( 'NONCE_KEY',        '~sMF;J6gvd=vE%4=hVIa*:i[0J,Uw3]N[L:DcPuA;-%eAiB2ut-}o!_1;+t[$MBw' );
define( 'AUTH_SALT',        '}J*yDPXP9<b~G^q*x i<^}>lr1-4F&*<0V}/dGwZTa]T=dDURaQ9gY7j/eQiBF:7' );
define( 'SECURE_AUTH_SALT', 'p}+#|-4Bkaz4S@#@t-ke7!lbw}G>J_XhO2GFAVFv@|r/qeTM2<1wNCz.v/pN[=]^' );
define( 'LOGGED_IN_SALT',   '`00@eS2IQ3,1sT.U@u;y-i/-U)qu,4q($?p.9r(c*)p&(61YJG3[[,`jmU<#NIW<' );
define( 'NONCE_SALT',       '{nZ<aQ?:8v-Y!G2[.A2v)FXjXh+ClW vNcOjgWXy 7cIf|<!95*Tn.-az5G3Q?.5' );
define('FS_METHOD','direct');


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
