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
define( 'DB_NAME', 'nirjaraayurveda' );

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
define( 'AUTH_KEY',         'swdJFe;IP}>G)Z./`.5ua0!F1PiWrMz:r%p[<^ybLHQLq`xy,5^3bt!:#DK@5*QN' );
define( 'SECURE_AUTH_KEY',  'i)OP^1Sjv8{ml!<dJ0HpgGI7|BYScG7:!RcDdhIYLmTCLDyMhB1 &sPSxHTQ~j=`' );
define( 'LOGGED_IN_KEY',    'HXG.~=$N9lQ;!!H(@DA4|Tt}e%#mRSptZ/HAqKS~9#=W|C*mA{&Z3p$-HeGs)v/w' );
define( 'NONCE_KEY',        'r>zwjqQt<&UO 8l&sG=iw${(YRQ8Pu!nnC_|^EwD-4$9cO9Y;SLnD;7<V.g7Xf^_' );
define( 'AUTH_SALT',        'Ci/iK5aal7[*g{9n_34N;oA`^&LTlzte*3R;tSl6hs@Mm<0h!}.~imKnrVo]#z`S' );
define( 'SECURE_AUTH_SALT', '<Ee)S#*=7(4nI^n5-lz6m.,|PnzQ]_UpI0gZggHZ6<f~@&Z&vgXQ[#  |FFJ$ZUo' );
define( 'LOGGED_IN_SALT',   'X1eT810*fJ4nlxl*+|AEXtUwGWcuv|zL;3.V5R1?-<O%l{QLoasEyD_i.}jiwG1!' );
define( 'NONCE_SALT',       'a;L=|W[y|]gcLvK4RHWk}ljMVXk[B9GwJ<E8<R8a6QZ;#$D5`j{S&19r!Sfrw}ME' );

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
