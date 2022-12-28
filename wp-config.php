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
define( 'DB_NAME', 'xonas' );

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
define( 'AUTH_KEY',         '#NAl}I2Ivp;M%NALF%cxpJbSca]IxkBH`bIvyM;([W(|$7s8B8:asq1[j<hU.cmE' );
define( 'SECURE_AUTH_KEY',  'heiK^>+cRRc:/b,5O4rj%l7ZGl!=+fZU7<O+.{0hHS!k?zj.S0*8}G&|grbktT]4' );
define( 'LOGGED_IN_KEY',    'aW|JU.vY_^vp-w:2b]%eK!idw!4+WNTMo`}oX%4rs^Bo Js_BgFAG)/IwCk>Hj6Y' );
define( 'NONCE_KEY',        'F2 ;*eXN9p4r~%GK-e;1E4@[3? ,~77fvo|zXq`(&;>Qc`<+Czs3h}~F)Z2%;ZKT' );
define( 'AUTH_SALT',        'I(&Z55xi:!:rVi[QNF-]ta&I}:iol]R<&.H0PaJu%t2&o*CV>tBh 0TWlohE*fdr' );
define( 'SECURE_AUTH_SALT', '/,fda]:S}kqr;{-6{~)?[@=QQqN+AjRF*wtPA#l>J|UF-rC5(IbG0#2,5dv$tdGD' );
define( 'LOGGED_IN_SALT',   '0:sXjHLtuTy6[5$I41Z#{mv}mDl!riqd[0D!$#;E01wctK0B[sy@gGU-bDG5mfm]' );
define( 'NONCE_SALT',       's<0V;i|{yo; @9#h|E+vVu]#-&T 8j=~oA4j`XZ6*WvIQ[>JY(9(7C:YZd#_4Agc' );

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
