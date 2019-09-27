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
define( 'DB_NAME', 'assli_db' );

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
define( 'AUTH_KEY',         'VvvhB{.[#9N!%6qV seR,9;mTJ)@6rt`=V.VY*uv3x3Hy+&}~oYAI0iVcEN`E?bN' );
define( 'SECURE_AUTH_KEY',  'A=N>w*Zts(&9h ;^kTE88`3D!e<0wlYjLWfrHlo3zNn;tWJp6?y){M>:m(lP[@z%' );
define( 'LOGGED_IN_KEY',    'JwH5Cu;n~4i-;<J2O:LI4ZgKyI-wQ>0V&=#e,4>Mydk604PBDV_3cIw+we=1Aa+2' );
define( 'NONCE_KEY',        'aX}I9am!2/YyWsi_bw~j|[zCive^w?l0yG/5g1GbHPy?Bb!r^SeVA6oopn;Ta$,5' );
define( 'AUTH_SALT',        'guga(SaMG;ci{.K^1e,t:g2YfVIKuathfG-%;~WU-3;Q0WO 4oNG}BpDIDri7D.F' );
define( 'SECURE_AUTH_SALT', '[M$mxR<VPIHK[/Gr*ueh?Al(YIwI;jXVnr$FhWbBqC26EpZIo6sDkk0~e!y}B[gP' );
define( 'LOGGED_IN_SALT',   'bL~O~}:a^,L:Wqx&!=qKdLo&&Pb|ek+%dDEI7j(rVJqh[4]A]FKvBNk}5->l9M$!' );
define( 'NONCE_SALT',       't&7XQVd.|BZE]v~ {iU|*emH l< x_QGu^i(<V10k#GPNHsd^[eoiFV=/%u^6em9' );

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
