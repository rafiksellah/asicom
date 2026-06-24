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
define( 'DB_NAME', 'theagencrpwp' );
define( 'DB_USER', 'theagencrpwp' );  // souvent identique au nom de la BDD sur OVH
define( 'DB_PASSWORD', 'Theagency2026' );
define( 'DB_HOST', 'theagencrpwp.mysql.db' );  // format OVH classique

// URLs de production (recommandé pendant la migration)
define( 'WP_HOME', 'https://wp.theagency-dz.com' );
define( 'WP_SITEURL', 'https://wp.theagency-dz.com' );

define( 'WP_ENVIRONMENT_TYPE', 'production' );
define( 'WP_DEBUG', false );
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
define( 'AUTH_KEY',          '}/CNj~3HGl/qDd5% Q{!U(sh|9!HV KA]oS,tiq5|*m&-Uu-IuG#_xxMy?+|,j49' );
define( 'SECURE_AUTH_KEY',   '6F^T)0jC #jCq*tEHdVfH7A#6s:gQv aaw2f||CEa53LKT_Aw=Hy@S_GPU-`9<;@' );
define( 'LOGGED_IN_KEY',     '?q(:*M(yJQxnAfy^exH&]}0>1+vkF~Z^Z( pMWc*sH37j2G:$S~~OTr{(CT%YsFz' );
define( 'NONCE_KEY',         'n=rI]a)d6kQGU2@*>V oGv_1$vzPi|_wC~n_XwxzH8{gS|d~a8_rvWY+uc9|[*rE' );
define( 'AUTH_SALT',         'HjrDN#n.m27[Go5`/=N)o H4{.c1Kd$U/V #>0D`)1i%Jw^LIQ@dq52e9pxU)(1w' );
define( 'SECURE_AUTH_SALT',  '@&M0NV~BCV,>O?zx(;Zg*otPe_Y;2h(M3(EngaH3gcax.SHYt_.Oyl$$Lkfg0sb ' );
define( 'LOGGED_IN_SALT',    'V%L$KZm&]s_/nI|)b1kX[qm!P:)wM!k1=h>@f.v**m)gRU[awlv^gA0@lo008|x*' );
define( 'NONCE_SALT',        'ZsG)ij{>w1JnOk`Prj#<.xL]3kPFWBvol2T. TtB?:|&|Nj(;F1F%&>4>KBkJKF>' );
define( 'WP_CACHE_KEY_SALT', 'um$=v=#e:UrtwGe2W00$0@aj&#G(6=S_;T=(qIB56o[t}SX]^rTm 38j4,0D1`;n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
