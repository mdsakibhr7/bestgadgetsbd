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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bestgadgetsbd' );

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
define( 'AUTH_KEY',         'GltJBuvuK)S$OM#jH{3FLKQS!F>yD_N0S_qT5:OJZgtO`T2!(HDOzwe?S.=U]a^a' );
define( 'SECURE_AUTH_KEY',  's`6#o=l^rgGqWk>?uR_*rr<tc8u@U7S#0nGcdB>TpZ47OqhW-{wfk 3(u]uUt~m-' );
define( 'LOGGED_IN_KEY',    'KF)tI{X:637;OdDaAL&-koH!7& il$suIOz>RUrgH0)K@yApz8Clzv0_F?`MSWp:' );
define( 'NONCE_KEY',        '>qzi7dAOi,PL_]>;n;kKa`p{~t}.-qBE2n5Qf2g8%3{XS%-HFVY3)pL9Je2D`PJc' );
define( 'AUTH_SALT',        'V1u``9Tw%+2}:~Sm+3W?AsR}3Fs&$)XX#n%-{@7L)8nb6/F}J?L%6;&5mE8OT#&{' );
define( 'SECURE_AUTH_SALT', 'AcAsO{B@N/_XFFl(qn8[#%[L:QIF-hb^PipIozG$bMes3Lv $8psx)hY?m_%(<ej' );
define( 'LOGGED_IN_SALT',   'w|,{b|;!&nau+)py`Fzoy%C9oQuIvK)w2}9yhOj!{*R+EMn$8<U-]hMU&,5DKqFr' );
define( 'NONCE_SALT',       'wDWaSxE)3-]q|5RJ5Rcwz+e*T-y)7kb3RRe5p-i+T*O*vCith$7qEOn)B6N,}$@V' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
