<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'QbV1OZKSO@#4s:U`XE5^y(!6+k+StZ!,hpsr:IGy&]Yp?2`KF`X7K! nCwq;+pjU' );
define( 'SECURE_AUTH_KEY',   'z,+(Nv$0.^%GL+N&r*Q2F9dF>zqU`-PfXm.)<W7@n(h>]Z(HZsW#a^i(*}RNvx|`' );
define( 'LOGGED_IN_KEY',     'lzJ9bsF(0XD66f[^S>HR1(,0m)x#z{8g`rO[H>F4!C.9>D7(QQ&UxZ o0:b{)BYt' );
define( 'NONCE_KEY',         'Sbu[*Hf;-,FA<OB7LrL58Y7>/}5+zicJV9yAf8p+8SxEg^|E|I-,W7CdC`fJ-g_.' );
define( 'AUTH_SALT',         'HLA%=4/N.#Tv+<~nix]o$Rg9xm|aeyUYI_>k O5(Gb#Q:],0b_ru/goSPvRJ)9|h' );
define( 'SECURE_AUTH_SALT',  '7[ QrkWjR.4[;ib9bby#SRf|6i_ql}RJYSzF4XPzW8YW6yoNv?</8vi`iyg&;tVw' );
define( 'LOGGED_IN_SALT',    '=!F=MIN`<CErv)K!WNLjWA}|G@*PWhaP%5;DwK2e)/ybd46zP![`84aiMZ1O_0a;' );
define( 'NONCE_SALT',        '*:#$Ah>vH@MO[n`Q|ll&Mo18Kv4r>:{,KlNYD)*G44Ajm/EC:AO6tQVL_HGt0$?y' );
define( 'WP_CACHE_KEY_SALT', 'k:c+l*-nSZmdn9%H58e@#V)3-0{H|PG7I*=ON9#!YQIQ~79#UIWaWe6r0R?Q3zxa' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
