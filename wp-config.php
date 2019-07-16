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
define( 'DB_NAME', 'iiumnew' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']zb0PmMq?2-kG?!30D%ZdO-{~m5([p2>}{rXo~)@rHeV3@?NX7|HZb2Lej6jh%e3' );
define( 'SECURE_AUTH_KEY',  'HJexTG%Pk3=i:P1iKBA#.W?&b?<|fT5+uPaJF~`hl^ QWuHw(66!$!^/(<epp>Ry' );
define( 'LOGGED_IN_KEY',    'G8sIJW~b~Y+DvQ[($!-&csG@j}NSvP<D=Vzb8X=v9_:ptwc%[nutV(]XP^,lqY/9' );
define( 'NONCE_KEY',        'td)q~tF_db,gZNZQCX6kM.u]6||.w3@y[#dO]wKyC-JU<B=Rj7.Gm1@9F5)SpitO' );
define( 'AUTH_SALT',        '~,5d6>oKF_G30YiJ44%!ljWM[ws;V;{98fD{z`8n.OAA-BW<T51HJGU5,(n.Bg6-' );
define( 'SECURE_AUTH_SALT', 'OV%x5E Caq$:oh4t^^wuZ73~H4b&-udtkD;,zvL6#jl-fX[u;F.jY+qe]W)]~|0?' );
define( 'LOGGED_IN_SALT',   '}*ZOY_l[ 5dJz^+?sVXt&vpflJqwir7+d=udNO%N){;O2+%AnQC.P43CCTr_glw9' );
define( 'NONCE_SALT',       '|4ic~F7/}u5yPc^dVdtltz6o;},eOOaM_7&dGO}@Rk^eD7z7E]0W!e[-kO!!fx2m' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
