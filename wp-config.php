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
define( 'DB_NAME', 'Contact_db' );

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
define( 'AUTH_KEY',         '}yhm-6YVRI.9O^K=%P#xJ-!gCyjTE)a:oEd*{DL$ZD{K2#!lfv<}hj]mOboJj9b?' );
define( 'SECURE_AUTH_KEY',  'RppxS3hsLc&H]vhA OzD~6*0tLpFAgiP0k}+N)egUf3%2fXb;cX,H<5ye;sQ5pmq' );
define( 'LOGGED_IN_KEY',    ' jC*K@G2v:qoXKuP]0)[@{`>x/AiS+-x{J<NN1+M0Q+}RQ@/zUtLTmAE-I:THC<!' );
define( 'NONCE_KEY',        'jPvm@GOtB`JLXQXWGWq[dj@+sm%>.(~|a}q_PJ+XTjO2H.C>/?|E[Gz4OUs{=).B' );
define( 'AUTH_SALT',        'Bj=x0aKN*guI<b`4FlZ9$K~QV3{zv8f tYBU7yJe~#pz~M&*R,hcKH2K)-*DKJCi' );
define( 'SECURE_AUTH_SALT', '!J+A6GLYCB^Wrs8~E@ (_PLrm)8]Byg_fmL0k6,-!RiZi#R<jZy<cg%`V0%4@l?1' );
define( 'LOGGED_IN_SALT',   '#hQZ{JO*oG)naSbABc/07L>MB6*]>m/J]$Y/.c=fGR2^3@p{*L6Pdea9`9-S-y`7' );
define( 'NONCE_SALT',       '@Oy~ri*9^FaHuR[IaGcoc!uvKPZu)mcQJ1%BD!`*)F&<JY~=R+{NrfEYtxL-~AbR' );

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
