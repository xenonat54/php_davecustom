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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_MEMORY_LIMIT', '256M');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'davecustom_wp904' );

/** MySQL database username */
define( 'DB_USER', 'davecustom_wp904' );

/** MySQL database password */
define( 'DB_PASSWORD', 'D#g5)SRp27[m1' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mhtr5zwcg6akjsjuppbjj2mq1bc0ivyhslvn5satmccu5spyfwiw3qkutbz3wamk' );
define( 'SECURE_AUTH_KEY',  '5xzourvaocisjirdnhokvb0gwkbvzyjc7wahbfmalyddy9wrk4czzv4dzi2whwi4' );
define( 'LOGGED_IN_KEY',    '3zllyzxl8bjaz6bpdli1b4ovwqpb8dfgu0q6xpnrzf58rogic4hbhoas7lhy9sok' );
define( 'NONCE_KEY',        't1djtxb7fhuoeadu4nddhejwdpnctrhx0e6hxhiupjjrq28kf7lxppqvuaxvzlb2' );
define( 'AUTH_SALT',        '9ghlqfffg4afe601gkcyvkjhxkh37cgivoxavfyt17t8ifswahakgv80g0wdqznx' );
define( 'SECURE_AUTH_SALT', 'j0libh3dfjym3whuwzuskn2dgqkvacffvn9l3tgzxqap1mje2fugwndgarlbc3v5' );
define( 'LOGGED_IN_SALT',   'vhrh3hinodl6dp6904q48arcfks6y4otjv1hg3m0iiqqbmq2ocy9kit9lc5bjdkf' );
define( 'NONCE_SALT',       'ff7bqgxkeuly7zvjeocqykl2wkzoncycgq8km5uh1flntv7vxtjhxkst6nppl6yv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqb_';

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
/**define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);*/


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
