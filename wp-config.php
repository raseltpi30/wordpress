<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'jmd= iZ32&`MwI BkDWt(*pSfG!&E{.q^.MiaGLYO4`hOR!aZy~V#iY)Cus0-|A}' );
define( 'SECURE_AUTH_KEY',  'P|kC4j>PnUI0);2tZtY66U_$!<^p(,A2eQOy XF(-[0FfEn/D}fJ_l;.zf}+~mHn' );
define( 'LOGGED_IN_KEY',    '6(7vqI5z!hztl;DUrW#fZw)g)PtD!NNR##L:$WI/z@9?@T5p,NT-+lb(mSTeyOzM' );
define( 'NONCE_KEY',        '|.KvZu9b,E4tqu$,_HegI:k$30{vYzcCMK2+oWp7;.Azly?_!u!8?QaZH=q_37]O' );
define( 'AUTH_SALT',        'Xx>0u?Z$rZM5k?B`w)dc2r+Vu|-kIDIo33VlogU>=*1o&hhaC;UZ30V2c{T6KC49' );
define( 'SECURE_AUTH_SALT', 'd7c07]9pJ-s+81}]#bavaJ#5n ?HquSbcQ9`0J)Y&9<]=#KPdS-!lfoKIvR5ccW+' );
define( 'LOGGED_IN_SALT',   ',GFy|Lqe1^E9 ylozu1]Gu+}MNWJ>W8)cSN.~ruG[m#G`)kIJ<5e>6Ze;2y{>{5m' );
define( 'NONCE_SALT',       '1*7#OlAR{f+C&>X@<{; M=9`i-$>XK+|Ed8W.*aq+md#Gt6_;pl7|fTZ!yg+)rp`' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
