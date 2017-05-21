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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h%F(?A9!`P%gP7g[DB1YN@y:VuP7Hp>6$;66y9*b[)e!@1im6[LM?oH|^+xj+J2K');
define('SECURE_AUTH_KEY',  'oe~jqZD},%y=zD!*#VQ_RB-O8Q:ios3q`y=>_m6Ak.#T[~Wo6{{,1l>/<sd7P[va');
define('LOGGED_IN_KEY',    'HFxd@)[zg^GmG.NuV1Ib{Cs&zchyrdyeH`^x=BL:=5b>vD1ML?a$[a?h%$svpbKT');
define('NONCE_KEY',        'r|-5ba`C(a*(Ig&{aVEZwHwWVwABkk~QWSk+d%GF)uLq|y7d+oQclG/AOF+SB-uH');
define('AUTH_SALT',        'Yn`Mx.pV`_|s&3n:t],(d?8jM!u5W*dmKSYrO$dj)>B>Bxo!<8-%xpRo%pTo >I4');
define('SECURE_AUTH_SALT', 's#2]eTK&^ID]A$Xxuh~08)(DzG!=S|6&{G-/Rcj*B&@Sd;/4v=u >9(m;n_26zdU');
define('LOGGED_IN_SALT',   'lAa1jl95T&=IB.D.lr>0fpAq9Hkc|_iv@Yda%BKE5[2[<#[ugE|lAsnkAcrnuIY_');
define('NONCE_SALT',       'RYc$H#)i[jFTLPU98g?{t?eq(O1UHz0^nDrgt`&]l+6x>XK&Kzj3p0KK;oW3xNq<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
