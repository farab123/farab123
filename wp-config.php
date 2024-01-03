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
define( 'DB_NAME', 'project1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'xZ3X6yKa`zZqN>A(B#IC =+9inNJ`<6eOY>mx}.>k@lU@Ld9&W-PyUUfYyVyJ5mm' );
define( 'SECURE_AUTH_KEY',  'M/C8M#E$MM2VnrmK%3r2DfcBa_%K_h8|[fM|eEE/L|Okznb7jy;S~Uvp{/-X3PO8' );
define( 'LOGGED_IN_KEY',    'K*rjka3%lR0AM(+ZGcCBk7S_;pRc1JRa72RnpV]<2K#c*>{?UaP/Mx{) FWg>1wF' );
define( 'NONCE_KEY',        '2o<%xjj/>W2p%]M]nx-I1fMh$RAS=YtA0{Dddml)8v8A:{6u<?+Q8ev&jvEXtpG ' );
define( 'AUTH_SALT',        'cJ~}r@Y8n3-:n-Fz88n/3} /#P.a{xguEu^Hc}&d)}`8Ce+CA.q&W]iV{7d+abaJ' );
define( 'SECURE_AUTH_SALT', 'R#fx7b5cQ<gr$:NmXnGMpD?[7Bv}H`0O-uQ}@R:(@z8<Of&;<W[A;eu8ReB_QB4w' );
define( 'LOGGED_IN_SALT',   ' XmS=yqg.omOcTQ.<+jH^t.%>ddu6&j5r1.oy3tggY<e4W!3gC47x&e{=5,+!?yu' );
define( 'NONCE_SALT',       'HaX)P(G(OUBSmGyF M)n3I,=zY:I!D&#^x!JVRw%[csAVBCju^){h`ClOD-NSq3}' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
