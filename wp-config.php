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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zJMFL!6DqD]N*@LDZI1S-]MWbA`q7q{`hYE+%<4nR8GHY2px+;C`&l?~E;T32;QI' );
define( 'SECURE_AUTH_KEY',  'kuyN/&&-4OF#0A0HF|txMpfw-9<6jyF4w{3a]L#[9KSt@K3)jR8HI9x1D3uG:9f1' );
define( 'LOGGED_IN_KEY',    'RH*f6!`?%Th8-hCq>y@1Aw.jI6kqtE+5!KW,d;!,re8eGgsx>_=f7iS#K0CSIdx+' );
define( 'NONCE_KEY',        'gCe?2:]u~,zGMxfD<x$_hKXPL 5eEnS<H#Nv .hc5a >7yaT$fr=:lYV*i!c?yfx' );
define( 'AUTH_SALT',        '^^ysqJu7ck][Ble.Sr;h`A%M:r(W{9SyB0F,z{zrd`I0Z4z;uKCgDQ11_3~qhb[<' );
define( 'SECURE_AUTH_SALT', 'ip:m.fhExm4!J^tM.+%2 0r069Jm5=237OAVI>wIu9SZv!yRN81W})hD:4]gUFI5' );
define( 'LOGGED_IN_SALT',   '{)v{xAVgUDW_fm{kFV7P@=ff|[r:qak[~S+i{iNuFn#=Em7.@?N5V(x)MU!d5owm' );
define( 'NONCE_SALT',       'bEQs%JZ>.N_Zwd.P1>v`?Mra_@5oPk-,mR^`pzQ%co&U&w)jEAUIv tlxd/uq{`v' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
