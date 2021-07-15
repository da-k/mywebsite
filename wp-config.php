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
define( 'DB_NAME', 'wordpress_base' );

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
define( 'AUTH_KEY',         '+7|F2,;u!. *`q6|U|U7ggoc?,J9w][a4R)&#[$X>/_jO[LyMc}3#T<l8tXLWxnD' );
define( 'SECURE_AUTH_KEY',  'M7yMg47Kx2c$AEyMGj!uW#I;*M#?%8 mIL$<[!&$Z8FBJe2r=S*5ThW?_M 5];.r' );
define( 'LOGGED_IN_KEY',    '?C|n&4VSQjS6blV,@|QVpW6>FcT<SvYryN/Mwp+Nb4d(Wk+*VzezKQn|nS}mJui$' );
define( 'NONCE_KEY',        'l8`s54I&N;UxE:lW4}R)QC/SIQgWBG.U`(@cbk4i>Uc:p?3D.L?0;NkeUuW17v(M' );
define( 'AUTH_SALT',        'Ov]]>:xnIzL-,A(p@j(O&6Hh~(qQ>~P_n(~o^ 1!LbWC.u^v7uR{ImpzP[f[#s+{' );
define( 'SECURE_AUTH_SALT', ')640O.jIYPs:nf^c^t=i0t]dC<@+/qjRO%UO#_e)~#HEWyD(U4Grq8tzezO6DV>r' );
define( 'LOGGED_IN_SALT',   '170)ToNw?*hAj`d~^Q@{zJz*n#`6_N,*fk.-RD{rt$YF2f{&}w<&>uwn9HO.Dz?@' );
define( 'NONCE_SALT',       'R(2i:w] lu3u(FAZ)W/U)utr2>ZE}p@7<F=TpX8uTu~hmx]u]ZgWKK/xg(tmwETG' );

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
