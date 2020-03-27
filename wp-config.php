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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '#N#Ky_=rgN}CtQXo7MU|BI@T/v0<QE?-U6}N92>iSuV$VyfpHoE+}ua;lTw7O`=:' );
define( 'SECURE_AUTH_KEY',  'GF}kj_[0I|q^Dq@jgrV k(ikt+=.cwXEO=(=I2oyuFU7)+-qi2`f7MJPU,q.`tAq' );
define( 'LOGGED_IN_KEY',    'N>ZUH 4K<c6^ruFK1Pwf^d`{[goF4z;oS>Uk||-s*|I5E+>(S,Q?=FH7jm7AqqpG' );
define( 'NONCE_KEY',        'Hl}yLD{X+G0XKWyjbGzqa1;Vo^smh;oSu^j:NJ*E2OqbvaN8cwS{Ns|kZi)z$3E4' );
define( 'AUTH_SALT',        'PyuiulM1R%4EnKR2VC`{9f=1f5@unT9PReHm8H3?DDneW;;IkA>kK!;=!I^9UgLe' );
define( 'SECURE_AUTH_SALT', 'c5UDRs1suP4eZ*P@1BN5.[K{tv84#Sv@P&8SwSIynoU?3a63I~(tMbVHkIY%Q$CZ' );
define( 'LOGGED_IN_SALT',   '?&2wWwr--ct.S-z5u2{w*NXc|l8Ud=~djI_=,NKkffdTF~,[OJ1!X+< u1O3u`$E' );
define( 'NONCE_SALT',       'hnJJQa,i7wrSWWy|fu0Yszx-<#~+8FJ}H/k8c}%ANq)#k;!l3+el7w7AS>G6x*M2' );

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
