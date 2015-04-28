<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'songhang1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'u?{EI%mBQtj5S+yJYSI+[B]PYvD>p(+~;ip%BN(~2xZ-Y-nst,}yUyhsZ^d&,f0H');
define('SECURE_AUTH_KEY',  '<YXj0YAtGzbRL)2EyA^*j}3;v;Oh/s+9DV8E1_y+Be9!|S-u6<)b%8l<!pN=T{*y');
define('LOGGED_IN_KEY',    '`iYCL`/O;N2Qq8la&^-n g}JZkyPR#;P}Tp?|-PF:06S1Y7AGw|{uI]b7nW}Yml0');
define('NONCE_KEY',        '*AVB/~[y6dMmpgRokK7+_]yCZ6:hKOYvT ;FyMuB0>%Qak>@3[`3ofk,6FwV:cy<');
define('AUTH_SALT',        '}%#vl-d:IUKG101_E75f}z*k#MM:VFzG:MnYoKAqo%K}?3f +G*E#]{c%[,W{0#&');
define('SECURE_AUTH_SALT', 'yLR#qt!D]e`K|V18J9w9!#=,Rk5!&$Pz$$o|,M~rbpd!H0p@m:;<m?aw3-#!;4W+');
define('LOGGED_IN_SALT',   '>/-|Jb]>~:6|E523*Q7_bPKiv> ?3|$S6h4R^<=*![xvBZa?_/#TQw+A~t$HqOyI');
define('NONCE_SALT',       'S;8{AoioIdt8|E{o-sCBKU%c>-AWcvMKWLn=lS2z$c<-wWO-0{>nm*M%nM#0Yp]~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsh_';

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
require_once(ABSPATH . 'wp-settings.php');
