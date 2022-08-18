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
define( 'DB_NAME', 'lamp' );

/** Database username */
define( 'DB_USER', 'lamp' );

/** Database password */
define( 'DB_PASSWORD', 'lamp' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'JGy-_&[JLw4LaMWn[9Gkw{Eb6BS(Qq~W6@(|6$rW8IG&(5|c8kn0K=+]]gS0dHi,' );
define( 'SECURE_AUTH_KEY',  'shId!JGhh`TZt-sEBSgc7$1Xj0iD}L>>zEw21 _s%l} -8UGCVPDaY3<bs(<.+<%' );
define( 'LOGGED_IN_KEY',    'I458DE_<qLM[m8Bo;@$Yk 5V%PtMZ&/~)UgY>aftsB,ZXT~Jjp|4+6C+~tJTVEQw' );
define( 'NONCE_KEY',        '-jQP<:RKgliC_w2*~G6?Ev)7HFS:T2*wg@Qu]joz,4JbGCzJHRh49ilp5:&^1?v)' );
define( 'AUTH_SALT',        ')OB49:%qk=c1xEay,zQfF|TnBoUM!~X.vNp+fF`,ymE+D].)*k^7%39*$N(~(iew' );
define( 'SECURE_AUTH_SALT', 'dVhYY7qoZaBoL! +Y5z5}D9d|?6;zdh`TAX=adlh+ZSQqDQ9Ez1TLQhD(fYiha^=' );
define( 'LOGGED_IN_SALT',   '>T Ls^rd#pXEE7h[T|w$3SYY `1%S9rAf?a5N|$IlbP![#HvNY7xQJ@!b7y}(QPe' );
define( 'NONCE_SALT',       '%8uTH5B_<A4b_0%!&`g),=@*8M[&p`I&9?;irbE=!-(I:hzMa*]@db2qD:ogphBY' );

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
