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
define( 'DB_NAME', 'moncms' );

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
define( 'AUTH_KEY',         'AlYMl#!|/d7|oKt{)jfS-w/rC?yGzsswn-_n^F3JXJBc%IP<dhWc |DIV03s;1Z3' );
define( 'SECURE_AUTH_KEY',  '!m}p[B<SC0VC*v[[#;0Ix}8:16:(L6s%YNu7gfnelE~L36q9),i`e)@#KT`io-d ' );
define( 'LOGGED_IN_KEY',    'kl:$i8%I47rJz`)o,8%w;R]}<:agz@6qHmYH`@3Vc-&a-b,S[94LLcFe<C#g#e=9' );
define( 'NONCE_KEY',        'K{!&fg`Ijnq2BT%)_-h4FpG,}=)^TR?)pmr;LTYxPxGUs6vrQu{?Dl<b<qLWC-D0' );
define( 'AUTH_SALT',        'tJeTu00QLyl-6n8gu*qrO=`dwUxT};]RXHl0+|{_YdG)2 >hf}:wOx_&]V6@BVr}' );
define( 'SECURE_AUTH_SALT', 'UBwD^/[&t?gb}~P&4)YaQplt&-`&uZe|zxz*>U}4QTR-`:3z* e k|Lv/L(;!8WI' );
define( 'LOGGED_IN_SALT',   '7$7LmR]c! u8kzeKvAa-C:?4BqvvdYJvyLpT9RQ7T(:zVo}< A&H)(2DMj;6XJ.j' );
define( 'NONCE_SALT',       'vJ|3dd9D1,i[uV]ZmxhtWEIL$ -x)`;)B3@eqWLp/%y -rzdWp#}j6=V4Pn05zDA' );

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
