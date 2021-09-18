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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

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
define( 'AUTH_KEY',         '{B$v)64zyFp},7lrP6Q6s#$+s|y7,PKG4iQ#[:j-.BWgq^f]v(mmDN(x_7}}mv]K' );
define( 'SECURE_AUTH_KEY',  'bNqrB!2rbx7lW{p6C<}aC${$1{_,$sA2QEm?8<ZhyPx@A4+FbxGynioZ0QEeZ?)K' );
define( 'LOGGED_IN_KEY',    'h}<ML&nCo{iDgU2@(Hb!0:a)$YM,ZW:++U*1(O-.0<4p:,frpi_OX:,IDIdKK2vM' );
define( 'NONCE_KEY',        'HO%KhY9;aviJosq*`hU; #3 L?<W)`,Iy*V&Dr&3B+Q>C%0hKY9%E%J|!w}o33^>' );
define( 'AUTH_SALT',        'Tf<C1`GE@O5zT31:*.ew*`zDe` )r9rSs<0y1iMUTnph[Tag@M.JVJNu,!jUZshj' );
define( 'SECURE_AUTH_SALT', '=W(p<$/Vg(qE1;vCWBw.qc_(pAV+&~:Z`y$BHzp!}6:Z ,Inr*Hmy{w-,7kH4W%a' );
define( 'LOGGED_IN_SALT',   'D^`G Uf3Ss~BwZ[DUeGAIrF:@JMO;(c.VWfsHkp]p.=VO&C(?Ku8jh#jM,w(s7)@' );
define( 'NONCE_SALT',       '-=vBfQT~zrwg]V?e6LJKvKc;m-}M[VDXPlTI4~RY.kq4<u[MFC&zXl9U@A*`R{|`' );

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
