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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


define('AUTH_KEY',         'bmnSH28M84kxzorNUKU1zo3RlIBm5/mx0GMdn8PiscwQdj3GoDqKyhnodLGH8eO+t6FivAq8UHDcSIou6O/3Dw==');
define('SECURE_AUTH_KEY',  'p6Wmt4zNllhcHJDK2QSyeCT9TsLXp9pGozdGrSsXFeqvEhiNm+gm8IB1X3jNwQ9gzw0bog3mX/ugM4/lAY1e5Q==');
define('LOGGED_IN_KEY',    'GneroGETvVgpVMsZZsz0Uf7FtpQ76zH09kh+TomMsem5OKD4I4xUyqEuXkczDuy4QvGIm9SAzeSOqARb4FYMfw==');
define('NONCE_KEY',        'bECgwJVOs4Bk4RDeTJ2FB5yAQ33T7h6hmVJGMnr8R796vNegZhteCFn07PP7UUjNd4GOckrzXiTv7HuL1GlLaw==');
define('AUTH_SALT',        'pzl/O5xcsQLLnHcPYVNSGREPvbHjHtN2gmlBQuKUOqWNm81n6FbEHejdfiZO2bNDZqqkI0G6VKcHs2sC1SCzWw==');
define('SECURE_AUTH_SALT', '+F6toE8N6vheFz1sjhzcAz88EfixALFkkjHkY/NbOCKhccJBrCxQV55r+2Or3QhE6tPNrnDHeIqM+8VqUJYkZw==');
define('LOGGED_IN_SALT',   '3iE5lC7GPDqWgfcLG6z53pEV0Y+9LvyDHVasU1ljbKebp99byU5VYxGIfbmZU7y+nJunjKlQ+mPFet9Z9EBWQQ==');
define('NONCE_SALT',       '4NpPMHIk5wGwNdwp9f7nsy2S08lrtEzqV20sdLGI0F3JxyMOSPaYRzPt4XlXYEiEczSmCDQjlkvZTu+l0K0WAw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
