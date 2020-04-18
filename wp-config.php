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
define( 'DB_NAME', 'voice_actor' );

/** MySQL database username */
define( 'DB_USER', 'voice_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NbH5box0CAZjRbAZ' );

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
define( 'AUTH_KEY',         'rpm;vuYA(dap@4c~V$f(ZvYf/JHG>caq,vjq^hRRi^DH2i7?1eH*I@V[Ze<R{jyQ' );
define( 'SECURE_AUTH_KEY',  '4! otOaG{fa@|`?iO(k01U35)lsX&>Kr/J]Lahjtt3]*hp6g09b*NXA5:$zY}/g?' );
define( 'LOGGED_IN_KEY',    'KN.4Q,In@:r,Lsx2NPQ|($6;8+;9Yaqe)w6VL8$Ml1~Gen@OM ^E~a:Qtn[v+B?r' );
define( 'NONCE_KEY',        'I-i~Ls~`n|mmBGuStEo]5z7LhRZ6=LUD1h[5ZR@2gG@&6:~~TUO5f_K#vv^mB`#w' );
define( 'AUTH_SALT',        'Ip/(<mE.O1Q KdwSgK[u!k<a:Q!.(nv(pLmInw;S_xZU ??.2k7ubPy3Dm$|^C[!' );
define( 'SECURE_AUTH_SALT', '1KkraWcYR,?<eYw@Dg^2RKDu^O~SMWHWBKE)SmmR*ghcKi>:ZWQs~f~s=sa&},bP' );
define( 'LOGGED_IN_SALT',   'wQv?dZeET0ycyfl#8z$akXoEnK2J^`V7tRHAa#Gr%4N^w?:Bm8y{kM3X#`ce*2fa' );
define( 'NONCE_SALT',       'ek^&gDJR$Nfsdy4~Afzp5-J)+#c`D?Q^]e`Q~eCu[Fc9*kf[baYvUe?+|F[v#|+3' );

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
