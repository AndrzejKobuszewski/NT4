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
define('DB_NAME', 'ZTransport40');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Vrsonpmhy991trn#5');

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
define('AUTH_KEY',         'OmCH5ZCTR &oH$:S9H0, gX5FXa`<{MLj-,}qoH[vXvadrVQLj3jXXYCJ,Sp#3mz');
define('SECURE_AUTH_KEY',  '6cOF@@t~WXg1kKEt~AklIoBRQLe)y7r~4SHA~{Q>%};jw73Mkx^T*R.VENAkc6Sb');
define('LOGGED_IN_KEY',    ' l3gdDn~h`VFOrUo[`>BETb=ZgFrNodD+q/y~1n417YGYI0g{kq&C6hb!lPI2vV0');
define('NONCE_KEY',        '3|2Njdq!,k8d`#sI2Dr=vU0,o*h.zX_FkV&eX!3EzFJ+&;hl*[)`!wv=.uDu<|s,');
define('AUTH_SALT',        'y%@CXy5c@1:Ika/]DT8v2Dh:I,18k~>Jr1,iB5efw[%1t#Q`O[hFV .*s!2c?s;1');
define('SECURE_AUTH_SALT', 'ia?s-._@Ih&S5FL3NO$B4U|;nTDv1BQ(j&p7-@5p|Fm;){jUMbqPKIhKY_JA&KhH');
define('LOGGED_IN_SALT',   ')/7#Qy~i[xmJO0t}`{LC/LJi2?%o[}5v4[g59d3b*r}^C()Kr=1&)n>f$,[,Qw)d');
define('NONCE_SALT',       'r80G;QgLBy-.{I5_LiL<s ?8i]=SQj$<PHS4}Qm$p~?!c|G^Xb;F}Rw~`IQn{> {');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tr_';

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

