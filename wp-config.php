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
define( 'DB_NAME', 'wordpress_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '&-jh--(pv8G_:.jk' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'TE+I 4$f;j-XFOQK;H!9b%-3^e|`HB+$PG:pm9y$]/Z`K3YXW,7*A/26Lp/MCcK4' );
define( 'SECURE_AUTH_KEY',  'N4/KA4-uOSJ>q(GjxQ|4f.&~[2A4MdM:|5P3-QK{=CN[JkYNbl_1HB?.TMs}+!(i' );
define( 'LOGGED_IN_KEY',    'rv%,b9]x8L%!uY&&x~%W-t.us`]dX/av.eL38M*L(%:6e1VME&LB$OeOh}bW^BvY' );
define( 'NONCE_KEY',        'Nc&p?-HG@jIa?oTOtBb*^+IA&5fBT> F/cUkTM,YL46>d4p^Z[CZr,1$`)g)Yo:|' );
define( 'AUTH_SALT',        '6xk(&FSWtJ=Sn`^L#EM@mqhCbZaqTv7+J&KRTxS0+Yc{88Q:vkC|[86^pw5+ -5Y' );
define( 'SECURE_AUTH_SALT', 'sBp!&$7 Noqs43M5%k_r7IQE|bF^j0D-^zTC3p{&{u LAju *SPmG6s.00|tKu{J' );
define( 'LOGGED_IN_SALT',   '-,@4qq.M^|m0W$Guf h;+AS^fuRk!<Y KPAK)Wb@lB]~ e>0l+0K|vI.<z,j~lp]' );
define( 'NONCE_SALT',       'X6<PGYbp_t(XXEa8 619J#*LHO|R,2U-(+icH{yUtb@9I-?Q91np0I4d>%ou;DYd' );

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
define( 'FS_METHOD' , 'direct');
define('ALLOW_UNFILTERED_UPLOADS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
