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
define( 'DB_NAME', 'misitio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`LucR$(8NerXfc*x1IS0`coR5eZwI9oYaA-?Qm@|iEDr]0Dr<$XC8cCz&1RM!:fM' );
define( 'SECURE_AUTH_KEY',  '/d?a|dUW AC^g$ F7d@ @5o#p&8qKo`moLKT?g]C.u^yFk:==BJK1uM,l2]Lo-[f' );
define( 'LOGGED_IN_KEY',    '#I-,$GP;(^pd+W*/+eud#Kb,2U3>T,TdmEjYxZ%ZXDHBn*KjF)K9YP;i}?6sk@r=' );
define( 'NONCE_KEY',        '`4]JJl=uzp|X&x6_e(dj+2_,<Ic:2<$p)V&K> 47AhVMwH?RoSwo{FLJYCv:3&8s' );
define( 'AUTH_SALT',        'Vd_,IdiHQj{42FaoA&joa,DMRs[%dhI.%|m&ja#+5E%tAk15]GjYfx=v.,S;Ix6K' );
define( 'SECURE_AUTH_SALT', '(8S4HfgNY8VZ43VoT;LIR_tq-f:py]f^3:E6POHg-~4;Kx=|:!<xs?cB_t1M[u%6' );
define( 'LOGGED_IN_SALT',   '}5JY5Yc8Q_Ei^eGCHawz6YCvj/r)q,08N#zO0@@L)~6Fx1Z{QdWO[(|2,kx`]csK' );
define( 'NONCE_SALT',       'a%Z8VifNn)dQ!9M{GO~E#E<D=NJVA*pD.lX0u H7bC{CUr%hqOVi#s7b&Cx%!_in' );

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
