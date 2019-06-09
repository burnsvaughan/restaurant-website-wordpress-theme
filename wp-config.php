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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'n7k*x=]MVD6T25Z ,|&Ff#K~%s4zmbQg$$)Qz%942.}V<|6wiJfH>5h4! $!lH8*' );
define( 'SECURE_AUTH_KEY',  'V?roIF+4?;T2+g`&$,kJSqLA[~!u?}d}!zgICogX1-.+o`3VDS,S?7/o3(F1UVlu' );
define( 'LOGGED_IN_KEY',    'Y4Z1jn/Ed9.%RIL%dl]CVgL#q X3k;bPcM!)1^]!.$a[;pi/yk5]U2DpedC0GvwY' );
define( 'NONCE_KEY',        'Z)M6z/EcfXd<IUi?lvYBn^|CM|2$$K5{;]UU{u[Dw>]zKN7woc5RsXGC_,v$]tqZ' );
define( 'AUTH_SALT',        'J5!YjN;0(!1DYz:<k+[k!AH>I]x^j4eDs($~8ArG9$qJd(qtk+U@:j6eUYs,@Y!e' );
define( 'SECURE_AUTH_SALT', 'vHJ~CH&sv%k8,<frJA?`o__06Aik#cJ>[<vxz&+aL#jLB{ vFjapYAMRDdnw5`gA' );
define( 'LOGGED_IN_SALT',   'i`Hkn<{?lL5uA$RTYbARx0=@k<<,h}bw7#Q~h{tGNlbl?{jH<~qu[Qc0L)9_tggS' );
define( 'NONCE_SALT',       'd0P%f*y7}E54ppnPwQr7FC9f(#Ih-D0 K!,W7Sp%1(;$.[4lded#Syd:m<P5c^cv' );

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
