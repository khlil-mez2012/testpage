<?php
define( 'WP_CACHE', true );










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
 
define('WP_MEMORY_LIMIT', '96M');
@ini_set( 'max_input_vars' , 4000 );


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_twins' );

/** Database username */
define( 'DB_USER', 'db-twins' );

/** Database password */
define( 'DB_PASSWORD', 'Qb047za?' );

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
define( 'AUTH_KEY',         '6]OK_X_{Zad&|q#N:9Kg`Cp_NM]&<{OLAj/FR{2n(.,+.<~7aK1K6~R;d`dmvVf[' );
define( 'SECURE_AUTH_KEY',  '#VOoi>K2z!*J1pCSsR+Ml40X6R@M#`d5mz*{dPBDIAPGUoD?<p*v7%PG-2vPN5Gi' );
define( 'LOGGED_IN_KEY',    'VX|!?8h/qg4}GH`l=O}VHeKsO(cGQ QznKd5H>C14a 749EE}ML&/iBxZ5s~ia@%' );
define( 'NONCE_KEY',        'i}_+UAai@IW30UY&mg!PaUx5aq$42lBbeK_&V<Ym$egBSGZKv{K3%#</W_eKojec' );
define( 'AUTH_SALT',        '{>oymJe,B_TpPly +Y1;&aTeOt+/MbIq6-mP#6VX_2GSdR|bngqDnhzt=Rm3DZ<:' );
define( 'SECURE_AUTH_SALT', 'X%T2e}N1P}o&Z2 >:qEu2)cfl?$kjVfhnEKe0Qi,2W$NRCHTr.qyA# iaH:9D`js' );
define( 'LOGGED_IN_SALT',   ')8ecm{l8<E?1A)Anb.+=J&BU&-%gm-(,$|p@xaot(<kIn9,JsFP4E)gBfXgAV^2f' );
define( 'NONCE_SALT',       'y0xLhcMlQB+t335%5FGg?QcKos[mV;cfN`kn|XhpzaU;%yi1QR=k6~@X^Q_.`&{$' );

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
