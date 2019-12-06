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
define( 'DB_NAME', 'internship_web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'M,#*zwiIh_B0tH&*)j+&gbm+|vbS^`1>5V8eL.=|yNS$u=u#SQ|fe|)}Eg{sq=SC' );
define( 'SECURE_AUTH_KEY',  '7OrLe9d+?vqx 8@mhHV|wQEOV,U+|d*6zXd8?%e{}n_el%2]efeSY1SR<7y=R-jd' );
define( 'LOGGED_IN_KEY',    'oX;z{4Rz9TvXM8%dVWy=wy))nmwVbm@_^pW0R&88^m^5Wy?@LYY-QSeUn%MtC:nz' );
define( 'NONCE_KEY',        '#%32mCTM6d3c6MPJ(,8TWa;ij&&=-)_1XAJ9-|~lLmN#iM#x+,P#nHyLs}gQ9&0-' );
define( 'AUTH_SALT',        'P`}39U:P{>uL+kOme@>-GPlI;a+/X+Gff.vhsWPbNa1Z$9K/);#mLmQ*`++|}|Eq' );
define( 'SECURE_AUTH_SALT', '1)Y35V1w&14iM.Hoh_jsZM}g94q0G;Pe`Q45[WFhxGSX*N,]|}%$-]j;kZE1<D@l' );
define( 'LOGGED_IN_SALT',   'G->Cdg[(1qeOFLo s>2KDm:|1i4{J+2LNpoCK9yU8e#z,GnvPS$mZIrl*MP&Yw.h' );
define( 'NONCE_SALT',       'I7)@!6jS>#AZ.cz>N:4T,gENM=G7E6{ adLp5|hssmx2msgPO=H6bE(1KNKW2|aX' );

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
