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
define( 'DB_NAME', 'twosistersonevision' );

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
define( 'AUTH_KEY',         'cg!v<=W *Di_lC=^LwH321e:{lT_w_0i+%|}^5{Ilvzwq8JeBUZw/VbiPS$[^X(f' );
define( 'SECURE_AUTH_KEY',  '[Y=wjf#WL^h/^NR1IUa<KbgMgdsAX_ w>=Xe>Wz W=+i ef1WkM]|,UiTMQ/eJrS' );
define( 'LOGGED_IN_KEY',    'S3XmN1^~.<)t_1l3/ZbOVp:2cSpwj_- e8djYEUilb#=td<Ssx+NuI#F:H0t:Ll!' );
define( 'NONCE_KEY',        'Z?&ixj[sy/ h&ofeB|}k_-WI1)k<XQ>5L~)<|uMvwE*RN*BIcdt4k`^Wq42d8^EY' );
define( 'AUTH_SALT',        'd5W)LH3:*esX;Ae9V$kgeSK^Y(>0oIcRToGVR/^4Q@h{k;(DU]mdZw4GOH^yGH@Q' );
define( 'SECURE_AUTH_SALT', ':h(=Qwf9opw3>XJ/suhE.4U`oMp]w#((zUSWH=:?K%27aMRSOnaV.]EYuVw?gohi' );
define( 'LOGGED_IN_SALT',   ';AX+VhsGuPo(L>>> z;O>caK!AZ:FOs-*StSz@JH[66^)*w&3w!=3]g(rh7d;e m' );
define( 'NONCE_SALT',       '9@|s8tirK8.[ [`=?fo)2zmu[:9J4Y.TgA4=7`2OB0CyVVNHYV;?N8{jk8?LGX.l' );

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
