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
define( 'AUTH_KEY',          'J 3x-!G:T(?@O&,dL,GiNi%Z*Ze1^~cB]Oia%5DT/&#,i51-Zh5pK~&*k2U}d%Wj' );
define( 'SECURE_AUTH_KEY',   '@8al[v7;g^%[J[1`aJD@%R6I|B);hQV*EHzusQy:ZP9;saN]kzo8mkfcNff8$Qg*' );
define( 'LOGGED_IN_KEY',     'R2S*F!XG,?gzqgFh}vb%OOi,p)0v|2(i;M4:d&2O(z3[TTSZKkGxR_a}6cIo~*@l' );
define( 'NONCE_KEY',         'kZG&S~ZbCypB@]OwWE#FXO>E-?~jk9,$?4M*yB->2E3,eG<^xE>aXtBOClW(CnM6' );
define( 'AUTH_SALT',         'hyAr|l}ipW!?pgEjqZA>)wlm`U?x`ntwuj|c6ET/9aE9%/28{A/o2{tgpmf<:{=$' );
define( 'SECURE_AUTH_SALT',  'B7nFH3b}*Eux@[;%N ~_-eE<p].B(/WWb+{Zd3VJaTDqSED$FrkAL<p_v@E![ElS' );
define( 'LOGGED_IN_SALT',    'k#*;z,;SO@wh2>JgK&es0@10R[Fw1C&RK1]F)<+mtB^N=!7;3f0DLHFsz}TD0^7S' );
define( 'NONCE_SALT',        '/Y9RPH1!DVc@q6TR%xAScx[.v#%.{V}`E[dBRe:5|-k+`1j~)0w:qER%4T[?B/0l' );
define( 'WP_CACHE_KEY_SALT', 'k_wUaD0_v#&oHAZ+S}S `Hm|k#!3g&?jGS`BXbxa/{FQBj! N*l=r.@`I{}-FMkP' );

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
