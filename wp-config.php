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
define('DB_NAME', 'strappress');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', '2p3pthxSS@');

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
define('AUTH_KEY',         'Gi0M+5R8Ggs%(IOnj 6,~<8H}rEPekxfs()dLQF{7hS.l@&zkW3,?d|FK^^;@?Az');
define('SECURE_AUTH_KEY',  '8c!FZgVjiCO7w.3*uq**nOMs^OQN4(cA_+D3~7a+YPS&XJfP%-us/-3vsVfWC#S+');
define('LOGGED_IN_KEY',    '#Co4lBZ$!-7MZA]!bM6e_5uKb8K*BWSz)3Ni1-qqF.)z|-F4OcZusVJLkR/o(dA ');
define('NONCE_KEY',        '9f;a@r%zhdU4?7vwXB{}wQ/b x_*?,k.XXWr+>4|D!:S0Jub-,.Ac-{FDDdP/SFw');
define('AUTH_SALT',        '|-|5 zOh_bh0}^RUm :KcR<J><D61sY$9+|qt7_!B7>Cy1F`>h!U6]!=&1S@92v$');
define('SECURE_AUTH_SALT', 'nlK5l)Y{]$+lISy+I#(<7E_YFw[a>$W|+6-K#OKPioB8X|XMv$AaBb%NX Su9&I*');
define('LOGGED_IN_SALT',   '^hM@fWjswrrv2rxW=ZmsLL3V0>yN%`b-I9HUQ{Ltq}Jh| `d[&<r,;HF`a%5RFcq');
define('NONCE_SALT',       'fQ.J~3|}VQ%Iaa!KTIf[ze_:z~0smYCdU-1)F!-Buuf8a5?+jGfr#KAtmww$4ZWF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lecter_';

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
define('WP_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
