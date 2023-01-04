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
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         'V%r/?D[_GP|V)-UkN@PH[*%S]nArnsh|T<Ev<2;,|H>V.NHDPga7Xb`[iu`[M z/' );
define( 'SECURE_AUTH_KEY',  'qfymx2}N)&TTml1}t:5[KSfq.LGaq5<Su>5vSs9~dcucr5-nma2#uT!VnJ7JI9+K' );
define( 'LOGGED_IN_KEY',    'LmVr1^Q0yn%OKH<FhEC5*AHNX>}M:592Y&qf5!#f-{3Y8|t;MTw<}a-zYK{uV<Nj' );
define( 'NONCE_KEY',        'YQ~#@0EF(85R{/>yVC!WQCYe]5ae<c4K8] HrmEa)<{(njsJg@JJwnl`9tzy(HQ9' );
define( 'AUTH_SALT',        '[/pr&g4=PkqhG 3Q+3=z6A&<0:>M88xuFx;7i,ye4iZ2oXOFB2Ln88wXnFl02vP=' );
define( 'SECURE_AUTH_SALT', '.oycWLg?B$znXN0LkiFMe*[bv8*XzTsS/O,X~B8[R@*0#mzw:B!7J;/gbFiK3Q#a' );
define( 'LOGGED_IN_SALT',   '4jI8*JawLnFehG8ipG1[^L5:b1j2W|tYpR=.J]5cO[UU)Wz+%CKHt!hB/#=]JvHE' );
define( 'NONCE_SALT',       '6|}mFX`[3UBI4Y;qjF:#Sfm*<c[N$H$t6j^6u8e$?]}GbS?sn*_1F*SU(f&qJURe' );

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
