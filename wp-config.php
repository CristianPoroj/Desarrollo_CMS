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
define( 'DB_NAME', 'umg_word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin*' );

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
define( 'AUTH_KEY',         'BrCMGsgdg`OG2<Y-{iXkDS]eNMAQHW_=n1R8iM`_=PAoGMd; o;2Q8C/qmso8`ij' );
define( 'SECURE_AUTH_KEY',  '2=jf$^8Dd34,27{cdC&P=,2`P|a=ij19tS;bs}9S`_+l9|PCK?wfDm1>0/chrIW(' );
define( 'LOGGED_IN_KEY',    'oA=h}oHE?V3-3#X,0M3<!rC3TuH|buf/s}q7@NiWoiglw^,Q{ezGu66s-/}W;*nr' );
define( 'NONCE_KEY',        'C Il_CA%#6jZ:L-Fw,K/di zEZL%4p2E_)nujj{2AU]R)54e]U5_ e@DzUBG#|jW' );
define( 'AUTH_SALT',        'QGt[Bz7ltFx+ttZ&twVPJ~8eoQ}/Fq)D0dqaT1rhMFcx(L5rwKUXLNCS!.jX^iAd' );
define( 'SECURE_AUTH_SALT', 'ooEy[|J:}`gu/~t  HBuq92a<=uMh{(~..dF$e)Mll($uK.MZrC*Zu4~J1ji1QvK' );
define( 'LOGGED_IN_SALT',   'ooU%UUL s1Gy5quhG(7,7tY2fS)phf~$%KZ_]yZwhBy59%<nf_-1plyrM(CL-eTx' );
define( 'NONCE_SALT',       'mM-N]mgkBiO]ve6S`eWsDt<[vi|r|6+a=5.gL&|~J$|h| P,E6Y.}{fn-wV-/1[n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_umg';

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
