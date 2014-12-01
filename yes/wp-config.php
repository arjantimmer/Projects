<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'arjantimmer_nl_wordpre');

/** MySQL database username */
define('DB_USER', 'arjan_nl_wordpre');

/** MySQL database password */
define('DB_PASSWORD', 'bHPvOlZ1AI');

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
define('AUTH_KEY', 'VwyFKmxftuTXvFoEHHwDusKcYCChfiNDWjGrYzsmExdqFkAWMERdgzUbEKUntwrRY');
define('SECURE_AUTH_KEY', 'agMfmjZfZKEUfwYXYdAkNoQQrkGCWfqUcXEyQHfwMqtqNApgTebRwTedBMmkKTfHd');
define('LOGGED_IN_KEY', 'nMVGPBTjGkdfZTjEMbZkxskXzkWzjCcUztMEosRijJenKxRGnajLZLQZKNFvbRojo');
define('NONCE_KEY', 'yoHQazUcPqrUnKMfPkCcATgXcoDjUabXYLQehBDeracbPvMdFAnGJQxkMcgbWwXGF');
define('AUTH_SALT', 'wMHAbFdYRtdXxfhneJyFNPcgxCmHQGNtQccBEgBtcNHsEWrTfvTdkTREriZVDqnue');
define('SECURE_AUTH_SALT', 'mQLHNmmEcjzzARQCThCBhJMdprkyvoJcNtWakdJcoMKAQUFtoCBnibakNXuPUAMvd');
define('LOGGED_IN_SALT', 'YpXnjDZgFZEAvWDXdnEDJrEiJpJNorWinzpbTBcBoZagXKohtNgjnmVxFAbVoDoPm');
define('NONCE_SALT', 'qFwUcFPWsHdDAajQvDiaXoHhuYkQNmNmGgzoVbYiephXyfYTPQgriYVcUhUELWXxm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * These settings were added by TransIP for your ease
 */
define('FTP_USER', 'arjantimmer.nl');
define('FTP_HOST', 'ftp.arjantimmer.nl');
define('FTP_SSL', false);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** TransIP fix: sendmail does not support flags. This fix is needed in order to make mailing work. */
global $phpmailer;
if ((!is_object( $phpmailer ) || !is_a( $phpmailer, 'PHPMailer' )) &&
     file_exists(ABSPATH . '/wp-includes/class-phpmailer.php') &&
     file_exists(ABSPATH . '/wp-includes/class-smtp.php')) {
	require_once ABSPATH . '/wp-includes/class-phpmailer.php';
	require_once ABSPATH . '/wp-includes/class-smtp.php';
	$phpmailer = new PHPMailer( true );
}
$phpmailer->UseSendmailOptions = false;
