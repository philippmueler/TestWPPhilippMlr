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
define( 'DB_NAME', 'testwpphilippmlr_db' );

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
define( 'AUTH_KEY',         'z/Bbqnq2qK!=!{6WvKf@<5E$3*]D882*M~)c^2h=dB8}raJ6Ro6v3_=Z#x`FMcWY' );
define( 'SECURE_AUTH_KEY',  '^{gxKlBJHW;oK8<Tux!i2YOzLXFpH%:rBCoK#q}~9lF+tN3mq|de+ZW;;nTlB4Hl' );
define( 'LOGGED_IN_KEY',    '>ESiKSChrL:(@IEr<,NF64:&=<{l6i/~ZL+8zhT}s+g1dE/Wif,!PP 7S;][$VWp' );
define( 'NONCE_KEY',        'Q9be?i*Xm[Td9be? J[e`F%UqE$*zO{sN=%*!>4LlDK)^&>PM,.y^3ua16/9R+Aw' );
define( 'AUTH_SALT',        'Ml7A-bK6$%tSX{p:GXvn?DvseBedW(lgt{MTRgX%Nbi)3c|PA5`bUR#_IYo^uIjZ' );
define( 'SECURE_AUTH_SALT', 'EC-;%2pp6*QZhu]xrg=xgo2Fq#!%tg^.L;2f58)LZw,DG;Oa_B6[N}HE|T?b0~~i' );
define( 'LOGGED_IN_SALT',   'H]Zdy8Mn=d7)nS#k}($bqcYRO%o,d#)^Z&=7!AEUUvrH{|sN#I^]@EK 41-|~zH6' );
define( 'NONCE_SALT',       'sX0+Uk_8aTi-seYh_&&B-]k9TS]Jd~gxnb9$B$(:@sw,TBRPX6ePEk}hJOZ[#>p7' );

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
