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
define( 'DB_NAME', 'vin-db' );

/** Database username */
define( 'DB_USER', 'iamvincentnam' );

/** Database password */
define( 'DB_PASSWORD', 'alueducation1.' );

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
define( 'AUTH_KEY',         'H(=7U`Bg`/wN/r;n>fqaTfQR@Fn+hE3xlaA_~R-+B=LxQ^S^?3Ob(`[<5F~rU9Sx' );
define( 'SECURE_AUTH_KEY',  '+P`>nlHtJX1[{x9k;-ahB@DaFI`bp}HuC+TX 30HZrJG$@W/Y8Me*=( C@7$f9cQ' );
define( 'LOGGED_IN_KEY',    ' P&sG=f#]p|JW]7#AJlG`$0Lv77S$b+@Vtgb;Ss:)78dJxZp6J:8Md|JJ4v$7:d1' );
define( 'NONCE_KEY',        'G&$)c>ET?}ESyppn5&H<}=[HDgiv<Lx=joX5X#TWvj). K,|W_C#w$B})Y,L!{W_' );
define( 'AUTH_SALT',        '%,gz{@Tn-(uxX[/u%Gt8tZ!w@a=nFxc3;}s]f=Fk(UsGg=AAHk_kZ:#A`M8RYxDl' );
define( 'SECURE_AUTH_SALT', '2E30{wWlUyY]*;TcvD|Drjn om8mW9seVXa//!z!fIY0X)zr ^C|.0@~ES@TM#$=' );
define( 'LOGGED_IN_SALT',   'cwQ!Wsdp_b-(#EBq6ZnaB8;0<__M0}`s^N2#;p&=mMSc^DEqG.0|39 @3oKUSfT!' );
define( 'NONCE_SALT',       '[1GcEATXv>8Lt#rCg?nK%sxjmAJ)d]X;T8<44dingNxzXpSgrfyKgH(,*uLPA(vH' );

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
