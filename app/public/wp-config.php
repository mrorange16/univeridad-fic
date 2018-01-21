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

// ** MySQL settings ** //
if(file_exists(dirname(__FILE__).'/local.php')){
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
}else{
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8}5S5tS6|,9K$aUQb}FWE*rAovu`C<2-ZL:_eN]f4#[T%s<wY|J?qt?,5JIKD*r{');
define('SECURE_AUTH_KEY',  '_x1@hLXgq6<krs(oDE<9bdET_`Z.-z#L.)-a6z`Z,F2[?uAF}etp6aK0)LYloB(c');
define('LOGGED_IN_KEY',    '-{+Ya,Podq/*idACh2V8 gN%K(],Q8ataYvPB,k!!l{%#{2s&Qzm*te+6f~(&qB!');
define('NONCE_KEY',        '~XU_9JaOy:M,om4LM-alcS)3_CWqj*uzOAp*lD@28nN[v1SudOij.^z `S,*Q7ZP');
define('AUTH_SALT',        'h39I$h$|SpAq?<2)0WDHOx@?#G&`!k{mQR68k?D+5>dbP7N6FWoCVU>7UF$pu<v2');
define('SECURE_AUTH_SALT', 'CPr{ZJ5pK/THC-J?C9=w}$mS#JboYI?5fae[NKF6E?m~J`hZDVO,/5f#8tQPZZ<k');
define('LOGGED_IN_SALT',   'AiQdj^=gEGbR6lxg bHn{SM _5:B8@2Ig [8WVZLK.}HnG`<ha>NKY!<nHVf_KXn');
define('NONCE_SALT',       'hU5`CPXDPc6*Sn(b[xvi! #g/V^_u6.{$OYYuaJl45o jh?v 6Yw5k:[Y55J5%^^');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
