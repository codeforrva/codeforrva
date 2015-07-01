<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'JMC;^D)~So((V<!4F.$L{b1h.0E3pTf$c{Epa*R 9WhFX}*#X%-CBUzKRjL*jhfg');
define('SECURE_AUTH_KEY',  '290j<TDcB&5@oz}A[n{-|me=M~Va$NA2H*}J|H|>DGzqkc_w[wsX@4L+B}sN?c?p');
define('LOGGED_IN_KEY',    'hufW8yFU {MB WQn@~.2@{ PK,|Q=2irg2A@b|R5rh5&|Sg*J $=I?*<DV^@|jNf');
define('NONCE_KEY',        '2[+,:KVdSJQf<9`wijJqr^bOnWu?4wmt}PW~~~UqBNh6o_eY/Ity^}df|sw )*~%');
define('AUTH_SALT',        '/M-/FxO7j3T~+MBdyjs|n2g#olGG>g,E-gvjyQ`s2-P<8T,?-/DSJ4|;>/CDz=at');
define('SECURE_AUTH_SALT', 'O{w>zQ?q|Nyq8]UH|{,ZY`iCM }2}k=i6(j}L5<y]TD=Jfcua?j:,nusRI.[+qA/');
define('LOGGED_IN_SALT',   'l/Z^%%|q6Yn5U7_-iv*+8Mwg,GKKHYgX%R#i_yg=J[G76W|c<e]ICOkq-2 J<oao');
define('NONCE_SALT',       'lr$%Opb`K$4uqjx{Yt&5LHTu-%/r_^b`AB{,&e,GXU:EI%8%qSA#h.;;(&qepjT{');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'pUJ2xrVmmW');
require_once(ABSPATH . 'wp-settings.php');
