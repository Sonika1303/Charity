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
define( 'DB_NAME', 'ngowebsite' );

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
define( 'AUTH_KEY',         'S3@i,Hj|*NYr@+a7kN %/1S>Bi6k<{uH/.#w@n*_et`:n.%Gtih:<0R:*]+2yU8-' );
define( 'SECURE_AUTH_KEY',  '*3:86,-jq,0#e>RvI.H}~+qyl:OWQ!GA>?p-/klml}rUeeLpFe3KNU/]_?W0*xD ' );
define( 'LOGGED_IN_KEY',    '{PR-F?io_0cVjWDpxG%$GQ. O(/,>%uGALPO?1P.L{]}3x?.UJ>qrh}YEnlYBn{}' );
define( 'NONCE_KEY',        '5c*E*m3#V4R8uH0 pyMT50cZoB{h()gUg<h9s#,?E.@Mqt=0pqn<0hz`74^,WV[r' );
define( 'AUTH_SALT',        'QYr|7n;&0q54^!-&<Eja3W1et_97eu[v?{ zCS~&5;CX#jX=0@O7^+r]#I.[xy7h' );
define( 'SECURE_AUTH_SALT', 'D(7~1+G&{*j`{WOo3,SJ<3[0!:x2q{|PuzJ69FuR9YOR1<#QN,%xv@:rAH2%cEFP' );
define( 'LOGGED_IN_SALT',   'Odxj3zF@K>Bbj`gc&]  _kEfDw1I%.dL*^4M/4DT|#HS.~W@Imp:8Lu`8mMxtlt]' );
define( 'NONCE_SALT',       '/V0W*vk1^cq<A/5ESAn2]wVpff7o{Dxj^+WcG#oM+ rDiAj.,b?9pxFaEAxmDjH=' );

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
