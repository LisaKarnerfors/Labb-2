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
define( 'DB_NAME', 'wordpress-blogg' );

/** Database username */
define( 'DB_USER', 'wordpress-blogg' );

/** Database password */
define( 'DB_PASSWORD', 'Filippa1' );

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
define( 'AUTH_KEY',         'cSegEJk|KC1[xtRounY!E1Y+7sVD!,WFz>9qqO{57{E5d|m0MD]yxk?bG*tYmQ4Q' );
define( 'SECURE_AUTH_KEY',  '/[R.DPs!r?B]}``^JvQJ*`$b.Lk.VK EqGhblTXwE_#esMub~ <X2md-%V))j=~Q' );
define( 'LOGGED_IN_KEY',    'n-Erg:&*|![gv5!i3Jk<U@vTLNaRiwop5H_M<n5N%0K^-#wX,~.j+m,xvbQD];RS' );
define( 'NONCE_KEY',        '*nA`@D/YrUS?@]<MTiZnh3[ESOfG#x<*_0Y~[^3%O{SdAT0Q8 k6q)K|7PuK8!;)' );
define( 'AUTH_SALT',        'YjK}MGf3`$Wn_8+*ug[R2=p%:|2&.p8 XBgeXwzZpMaYS>3tj+jpR4202[_BPHLL' );
define( 'SECURE_AUTH_SALT', 'bFlgA(/Z~!l~_#;!+>FUen| L:RPNQ?I-gkEHJkpc+t^S~<wnr>4K@NP=G2?WU9|' );
define( 'LOGGED_IN_SALT',   '-#]a`TaQOfD|w<QKmg|)0^g[4gGvYL?E%S@(bDkU>0><aTCY!JV&[&C6ire=5c:#' );
define( 'NONCE_SALT',       'n(?+`q}|H9~Px<ZTOAyWd9QkxG_sM^A_t8[[p~XM3t$9yZx-.zziMX>|tf;QKV>R' );

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
