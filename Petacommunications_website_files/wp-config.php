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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u150139568_6mu2p' );

/** Database username */
define( 'DB_USER', 'u150139568_u81Sa' );

/** Database password */
define( 'DB_PASSWORD', 'LBp3yP7Ptt' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'UV[AIF[_!PyxHYr9$k{zX6K<4FX%B%6b~<%N3-uUCtg+zNpY/o{@4}pmxzlSO*kz' );
define( 'SECURE_AUTH_KEY',   'Yb(1)!95q$]h4LRg)#QL2cxqGB EL[)@t|~WoQn%uYM9sZ2`l1}VOz)]NuX]8f,.' );
define( 'LOGGED_IN_KEY',     '-Sy/ff5HWY^h!CWGWelongBC!wSJD7|F]<-PrD{n;y5CI3;~Wv)e07[,u&mOh9QL' );
define( 'NONCE_KEY',         '%T~=g1n9HeP)WK6YxdLP4C;0mtNwz hpD&f1_0F=!uguBNr~o_2G!EVaDrukJpfs' );
define( 'AUTH_SALT',         'g%X,*L;J)9Z,_V9f]:,SIlmbn<rtq$CdORvKr<hT=EAxE4C0g#4.)(Qq14-;.s/C' );
define( 'SECURE_AUTH_SALT',  'u2,;HZa<jYR.svt3__JWsBHC2:-x(RR4H@yYfOiEfJV3*zU[SP347<nLgyf`1}%&' );
define( 'LOGGED_IN_SALT',    'g$|j}$i82>S_?h&`UaYWcavb7o1# =Z/rn%c4a8}1^B64gv59/KU1s}etnB>2__v' );
define( 'NONCE_SALT',        '#v-vBc}5N]%<eZs_[zBQN<OA,avnvCoBc{Rz0#d#|r5T{6yiT2|<kaK607S{z(sJ' );
define( 'WP_CACHE_KEY_SALT', '}&%^5o;zpjyQnl=|b# fLFccJrP{=S[r5)^WX?CCO3#[VS^G6DqYH]V&TbkCV<8o' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
