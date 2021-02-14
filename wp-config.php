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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doodle' );

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
define( 'AUTH_KEY',         'q/>|tu..FxWHg$2B5j8/nl9?[Vn4O--O/$bswXPqJ^m?0:b2gwC+J&{X =-<U?tX' );
define( 'SECURE_AUTH_KEY',  'xY$rtN$LN:>Gb]l*9*Z_0U,R.N_tGYhd }lH/eEL2$Esibmo(dEL@*T$%.!?}#A>' );
define( 'LOGGED_IN_KEY',    '{}>1^xuOhup8Gq3<|lmx&9>xpePD&>KMd<K?0Lr$|}QkIpN[x>N]GrsZONH3q&Xn' );
define( 'NONCE_KEY',        ' h?{E#rQ^ana!Q~oY1[aoK(*w:2 QK:,Q$Ixy5F|J[b9|^_rd.5sI;u3gH#Om<S:' );
define( 'AUTH_SALT',        'v}nbp4NRX&lq5{IH5}e>Z}qLxr9sGedr_U,}6A.l`^=c9?9t5xy%wGDz>o97^^41' );
define( 'SECURE_AUTH_SALT', 'R}9].$]=p/kjuC`qNw$u d(`;`M4+{q9w+2Khlq(p>(.0Rd/ n c?lADik !Zsxc' );
define( 'LOGGED_IN_SALT',   'v A_/#86J{7?_5$rvs`:7aF$*z#p:$VdH)f%e<Vye#G /t*/>f;Ux|JMgPaTaeu!' );
define( 'NONCE_SALT',       'slL>]UtAxqEK4/&]ScpG;OAu0OwLM*HH)j5n#73Rj25ONFdbsWz#c}W>+Rp.Ak=0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbc_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
