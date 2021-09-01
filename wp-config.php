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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'editTheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}N{?HK&%Fd Hz,~c9 bXs5`8IU^$bM1+|>Zg1Q:qLmi+M+G3b[KQ):VW+E*;Yzjd' );
define( 'SECURE_AUTH_KEY',  'H)7{j~D2Aj[di`O:=a2ur><eWn9*o/7B$Edi|B tjs V/-HxRS6q?w>>=>-uWZk+' );
define( 'LOGGED_IN_KEY',    '|TX3K&u<Ki,lK0T!q{U=;(ruU0@H*#eg)FO7YpYuH7$mjm:OO(2GL7w5>lUm6j|+' );
define( 'NONCE_KEY',        'NdT@!f%LCGk#n_5n&k_uMQuJDc@{|+~iW?R,XsZDww7FuNhK#<WD:L@L~qn=P_I+' );
define( 'AUTH_SALT',        'PUKB2Bi<SJg=O^{QVjmn|:92VPsEc$JKvV=dP7aC39UGzJI E!`E?J9d|o,Kcz:r' );
define( 'SECURE_AUTH_SALT', '^mwk(p4ci%Zj]P&;_-[3{^5+/.Vw<Ixl.,Kv[P(y`(h%4OhzFEb!I]~_}rl{a2bt' );
define( 'LOGGED_IN_SALT',   'K@tAykBf{G881o{7YY4@$OvNy#n(YeAxR7LXk|WNe~vu/v-u{c.k1[!I<;QOZe)i' );
define( 'NONCE_SALT',       '(ByS(3RWUp4P.WP`?u]HfmrRufQ}>GAk_=Mb6Bs:<i;pOsc/LUh{st2<fZ?<qfR8' );

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
