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
define( 'DB_NAME', 'db_0DQHh3kkfOL4O0KtId' );

/** MySQL database username */
define( 'DB_USER', 'usr_0DQHh3kkfOL4O0KtId' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YQ<(Z+@yxUl?^6N>jc' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'A]Zs92T+%1P$TVS)RQ8!WhN95sMZW)?Af%:y]q}E?O|%.[(|mzj>-(fZpsRmj5(p' );
define( 'SECURE_AUTH_KEY',   '4^8inO`G6]mk8Y} A>f-}s?!fW,])e9/5$rc{:Z;eQ2?!9O$jQw_GD^>{J;[K_?N' );
define( 'LOGGED_IN_KEY',     'cK:-#SS1Xqy+H1/_n a^?-km}K_f)$l$E%EtrglbL,r442;z3s4T8t~K3Zp;|0(<' );
define( 'NONCE_KEY',         'Pc[/pAr|2hbQcfzo$>Sqd)AzAePSU0+AitaxfV~U8Y9wl5~pdL:sU3%Q>H}NyFdz' );
define( 'AUTH_SALT',         ',Q}og,;m:8Fe )VOfq=nUlpkVhQFBG3sT-6lr,IvgL*EXmIAX etM[vh%;(}T?0t' );
define( 'SECURE_AUTH_SALT',  'O6Q>Z[wi1{%HI}2dd]rsri`r8ppo7jHzxQ1)goyCKT&Owl_R-FW$1ktsz+vB((tC' );
define( 'LOGGED_IN_SALT',    ':BD&az_2j@LmcmaH~`/%giuM!KIG4gur)4Xp=(a(8YuNb$UCl%SdprT|ReD]xJ|<' );
define( 'NONCE_SALT',        'G5A!& R.kw.iOD:[IU~73krUg;hNu<!^^0J8oxZ@la>|<HZv[t>8[n:@P&(gNg4N' );
define( 'WP_CACHE_KEY_SALT', '(fDPsBL!npX#h IY.WWQ#1&TjdEhjt T} <+V>+F}m%g/iXD|oHg].U h`G26i+<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sdvvs_';


define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
