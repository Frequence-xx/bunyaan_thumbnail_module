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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'vPQmXr=8Nvm}iVEkb8Q]CD36jm6U6`uJ//oZusyV1}42R6|{R}wB_RI%ES#=<a.I' );
define( 'SECURE_AUTH_KEY',   '[6`lTuUBa+`gOKg] r!Hh?UCMh<fYkk:8R_BnPzEVvgc0iw;1s}5>#l^_K4J}pon' );
define( 'LOGGED_IN_KEY',     'WcY9_#n#@a!@|*=tb?+]}:UR3v4*shYmm6nC6r@GPcWI7TR+.|;U@@R,:[,SQR+m' );
define( 'NONCE_KEY',         ':Mxu1wvL^nENeGyL$|oC]@8Hjv|{esr.Iy=`m1c~Z7`GB-uvvDCS-o!d*S5&[-lz' );
define( 'AUTH_SALT',         'bZ9WjJm0}de8(&h4q9FRKx>%RIwFruxi2K4`bvj!.l-d&e<jXa9C[euTlg)E4 -{' );
define( 'SECURE_AUTH_SALT',  'hq)Wb>7?a7USIVQg|hsf%I%=I#V_`LTVe  Pe >K=g;Q]s:W[/&~imABL1+v6dxh' );
define( 'LOGGED_IN_SALT',    '5<i(K<*T`)=N@+aRaT:onkupxh%rXYm8=s.0^3X.3[qHo0yB7rN5wfZcp;v*@}n5' );
define( 'NONCE_SALT',        'rGKr&y7LJ$HXF%rF6J|&pi9^J9DI8n}G*p;xwJj}Hd!c@{8T{EY,m9PYz?bQEo:H' );
define( 'WP_CACHE_KEY_SALT', 'd&Au<htKhz~cp!z~W8Zl$e}g[Rg38Qzj-:D^ot`hB.Z lMSA.&x43-YbCn7SN[}r' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
