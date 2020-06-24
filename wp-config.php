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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordpressTest2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bb@0770560063' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E+E2#AF>Bf}+=IdXN]8/1~DmD#lC=+UH4JV}WXg{kvM I^>k3Y%12MHg#msKAhT.' );
define( 'SECURE_AUTH_KEY',  'qqt+-ORl:SpR3??-,a+ACs2f]#P~6q!;b^BQ64LPY9$a>DMrbdcQ@)6+&DL){VD=' );
define( 'LOGGED_IN_KEY',    'JF&uWo`[j,@`o#N`*1p%K_J)JxL557k|,G+ [nslc`nL7M+Ya+]#!Lv}TjMpp+wb' );
define( 'NONCE_KEY',        '~(hYkC<M{c=lT=V[^U,{gwUk4v*M4PMLb:.IUQ)54kyTvTGnmcq_ [.*toS,#k=l' );
define( 'AUTH_SALT',        'T7c}^`03^^LyLOC!U?.X?EK8l8~?O_;B(cDc{(pGppEqx#|:&aRJ,d<9jL[SeIk(' );
define( 'SECURE_AUTH_SALT', 'NFCkt<vJ- )X;}kU(7R0Et,??0?d%P~k;drDmE}gn{|+5^oEnvYHc,~a+7 a|iJ`' );
define( 'LOGGED_IN_SALT',   'dli}!EGs;SZX^K%0T-d-wJ&)T( QafGF2^9gu.u!Wp9@Bfx9Y=[ ,TV!0cH^%SdG' );
define( 'NONCE_SALT',       'EQb``L%{IccI_J3*I-~))`V?Uy6j@^];v[DTk?FMIScu_#|!)Q@6~$pukV:DM54>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
