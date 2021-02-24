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
define( 'DB_NAME', 'sanakmiriyala_db' );

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
define( 'AUTH_KEY',         'Io[e2HDn6y^*7%UUEJ@h><8e_jA_#,sHv/O!Xp}37RB^fp!]Y[5G^v.Tw4-l]W1^' );
define( 'SECURE_AUTH_KEY',  'O<=TD Rzv)1y4eLVP?$0thFdpFj4E--Ic)G>x$|DYtGUvR01cM#PTJ`7tm-k@]t{' );
define( 'LOGGED_IN_KEY',    ';fuHDSh>F`p!S/Gp2$:F~-CzhPF7*;X2Wa!PJl[EEg~Ub*Ey3,pCAvvd3{u=?7No' );
define( 'NONCE_KEY',        '9;b=}T/a:o_^a]GUe+y~NQL-yi`M/6<w]5 1W1dCc%6B+Ly(#9w+WKLK]G7bZq=u' );
define( 'AUTH_SALT',        '+45*@c P{Yu% 7a?0JSC,.(axw6M:0:i#$}yZ`6JF#w%~w2_}{9eG~T:a$!p7?=m' );
define( 'SECURE_AUTH_SALT', 'jaJwW{/MS]da|C#8pFYBX+3<L7k0c!ugwYB.yj=Z=5Ac[)XA19-/)|TIm^OO4$B)' );
define( 'LOGGED_IN_SALT',   '%N/[.NtK0Oo%=Dxp%kr.@& .,CWfn0EYH__cR,/Cr(%@^#t<O=lw[xu3sy_w5$9y' );
define( 'NONCE_SALT',       ' itvZ#OT<]~FOM/?;{K9v5N-#oxrc6mx{[$q:AH]|.m.NPfFX6Cpmd3wAO>LQn(s' );

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
