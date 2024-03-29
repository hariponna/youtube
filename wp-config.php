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
define( 'DB_NAME', 'youtube' );

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
define( 'AUTH_KEY',         'F!lJYqrmefM#@S/3gq Qd}W&lih[!kyaML#?^ =!fWpxxIF)(_w!9U[vuP6Hx`q.' );
define( 'SECURE_AUTH_KEY',  'CrR!g`*bzJX(^WNGN$P;xWY_&s!a7TzW6ihL2x`AK}]V5Wy%3O*xp[(VXE).r`9j' );
define( 'LOGGED_IN_KEY',    ' 6n]>Dpr?y%jgvW7cC=$iHlD&{74AqAZZ7Hhq%D&(y-@S=2Gqy7*y)M<CC9Pb~;&' );
define( 'NONCE_KEY',        '|;R{CN}eB/sT3ugN6z>NaUsU.Ar47e&<uun=!lXB]@-+E,teJFnv><Cu#0z_Dv-s' );
define( 'AUTH_SALT',        'V{p?/]i*|dD8#rz[Y~%BFVE>DO ZVMhWA2bYlV)[Z(3s8Bc#@byy<Q5|^-.3R{&V' );
define( 'SECURE_AUTH_SALT', 'A}pyt*RK-`,R}tDMza1A]Vq.w(S8FM)x:Xi8{p>McB,,[j yV_)yXj?P-)vSh&sx' );
define( 'LOGGED_IN_SALT',   ';j+Vv>z<VfTJ3p)-@Ad,:sIIRZAF[`Ba*|dKL8tS] E*w8z3n7bs6`Uf%LYRYtM0' );
define( 'NONCE_SALT',       'v=UJn7# m@u&k8A>{n!+h^`M%e({|~MB;OZD:WaHqp(D$SB*!*{|6}>J>LBDj9rX' );

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
