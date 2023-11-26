<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gr6-cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<HKm?8W)8 >@][^ee@O3h3Ihl#1rW2zk+qffazc3|o]d0D|GiZ|_arSt,Nv]?x>c' );
define( 'SECURE_AUTH_KEY',  'h8qE<sUy{+:1L6+&?c#qssh,3YVqj307&2C@1J+XXPfY_*,X/WdUl.!~8mb3wtrl' );
define( 'LOGGED_IN_KEY',    'iv(uHNV_?-=Ri:~4xk17J(LNS0>Ke0a4rwUJ+cARtuIhhe}=<S*oGL1R%dS6n5^S' );
define( 'NONCE_KEY',        '#Gmkt*]}0?WK:ND^|=6RK*7%PzjbVj{-ztTKQ-+_TEjeC`:Ouh%](Ma5R2LOaEP8' );
define( 'AUTH_SALT',        '>u+8%).gpB$lj!dmKBsdH1`Oh`81@uX`I4&Wbk!7do:B:N=RPEIU&Pm1o)08Vr{z' );
define( 'SECURE_AUTH_SALT', 'HdvG|H>Dp4<Q?bb17O4X!Ah$QI_</47|JdJHg[ZD@-@c:Ax<^[^/+oHB5DHC* +z' );
define( 'LOGGED_IN_SALT',   '/^a5!pHujKsE!g<An:^tybV>fqhu5|w1#hY>c4:[CG096Ib2y^lnlLjnRK<@9;YG' );
define( 'NONCE_SALT',       'vCa XKdLtZ<l6)I603a37mm+h^(hI.Swj6;lG?v:.%ur]=X:}r12NjfDBW^LJl|G' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
