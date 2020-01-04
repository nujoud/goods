<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'goods' );

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
define( 'AUTH_KEY',         '2n2do84wqpks6ougrjaw9dmmuc9p6yievpgrfxwoimnqgqhyhukxak7lrxpzu5h0' );
define( 'SECURE_AUTH_KEY',  'ijxigqgcb4d2crrf3pbevdtqafybak1kvfbuukpzmsyl5nybuk3rfxjyvkapjvic' );
define( 'LOGGED_IN_KEY',    'liq8lxn1ozj3yfhqad8ndic5tbrhuwr5ptvyz3xobljgpxipdaw9wx4g0nik9qdz' );
define( 'NONCE_KEY',        '5egz6tdobynkfe2q52mucmmlzzgwejmtpgc2pkjjbmtnaz49ievuk8sqjtsgmaqz' );
define( 'AUTH_SALT',        'd2fa2r50wpakyr9u9rymzfoqbipoqiuhqzaofn65ltvnqbmvuzo56mk3hg52ptij' );
define( 'SECURE_AUTH_SALT', '3qfgpsnp08msod8fpws7eryv8rtu5odjkdzopzsxrzaumrpavt3genctf0uz1oaa' );
define( 'LOGGED_IN_SALT',   'l85m6gezucwss6xk5rcbrxhn2fz3whax5hcchj0gdszikrct9px3zccfixq4u9ag' );
define( 'NONCE_SALT',       'bprqozkhmuvdgxsqk9m9utpikrosojkors3aqxyb436essxwetgvyifcxjmhbue8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgg_com';

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
