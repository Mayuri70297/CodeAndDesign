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
define( 'DB_NAME', 'CodeAndDesign' );

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
define( 'AUTH_KEY',         '0jhNO(#m3Lkzy?fEoo{Ip]E#dih35{v6I#d`/R)UPZ1Smv}n&XFSkXg`e~zx@AA2' );
define( 'SECURE_AUTH_KEY',  '6La):$TS;Z%a}oW%W/E~?Z7JO7DHf/T8ANl~$V:egj)+jnM4!u(JX(z:HXipfEnh' );
define( 'LOGGED_IN_KEY',    'KK2-6?`Gzxx|U [b`]`i#a]#L@BT(N3Fp?F8!o^G!D9FFH.Js/gl/Ft-6dNeggHa' );
define( 'NONCE_KEY',        ' 8^E#5+ibp#)bL$;&dhI_|q Yd2SAELA0(1<5yby74s+t|ADn/Pv2f{greOW,9o1' );
define( 'AUTH_SALT',        'K3hRoEs]N!ZVz#?157DGr+@`XL#).i>34/FQu;zZqdaIuYY39@hK*iB]60%(mE?[' );
define( 'SECURE_AUTH_SALT', '2W?.?tfC;&#?&2o/x[r!q!rK=h 8D#~9#3nao@5M(:NNQYdc[L`nWcL,d]Jg<P]i' );
define( 'LOGGED_IN_SALT',   '-Ai!#k&[jb4HbMi4lDS^,Ug__N5zyO0MLSecXR>Snn?3B%/.Cm$$|=vR^luzijt$' );
define( 'NONCE_SALT',       'Cmf&9G8@H0{K`em3~_xW$&op #fbf)XaRAX3e|%}vGR0;&e37Vy[PDKr:Q/5xdc,' );

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
