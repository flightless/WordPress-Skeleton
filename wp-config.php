<?php
/**
 * The following WordPress constants can be overridden in local-config.php
 */
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
}

/**
 * The following WordPress constants can be overridden in local-config.php
 */
$config_defaults = array(

	// Multisite
	//'WP_ALLOW_MULTISITE'	=> true,
	//'MULTISITE'				=> true,
	//'SUBDOMAIN_INSTALL'		=> true,
	//'PATH_CURRENT_SITE'		=> '/',
	//'SITE_ID_CURRENT_SITE'	=> 1,
	//'BLOG_ID_CURRENT_SITE'	=> 1,

	// Database
	'DB_NAME'				=> '',
	'DB_USER'				=> '',
	'DB_PASSWORD'			=> '',
	'DB_HOST'				=> 'localhost',

	// Basic WP
	'WP_CONTENT_URL'		=> 'http://' . $_SERVER['HTTP_HOST'] . '/content',
	'WP_CONTENT_DIR'		=> dirname( __FILE__ ) . '/content',
	'DB_CHARSET'			=> 'utf8',
	'DB_COLLATE'			=> '',
	'WPLANG'				=> '',
	'WP_DEFAULT_THEME'		=> 'twentytwelve',
	'WP_POST_REVISIONS'		=> true,

	// Security Hashes
	'AUTH_KEY'				=> 'b@pQ+R-prl@oOKUVXd$_~}y+BT-7GR*bRR;bFX;gi#iRaW)rEAA$$LIb-M`G;wg4',
	'SECURE_AUTH_KEY'		=> '&ee~~NnBVAT9 w v;#DvD3_O}@0{*Yin_R5H~?*}6CQ?7KNc_*u/cDX}!c_Jw_fY',
	'LOGGED_IN_KEY'			=> 'f+k9]/YHM6?R]1rgi!eSDT/orc$0C$ti|-w6qv}|o$%n>_->roFP94(=)-9Twy*}',
	'NONCE_KEY'				=> '`Qral/yv]+I[d#3~~WV[z(1!#RQW NJ}5+}8NIRL+A~!-d=;|`cn!@jJA3UF8*Z)',
	'AUTH_SALT'				=> '6Pl^w|nJ>Tea+L4M8e+j{X{8m+(5A&Ozkpjx{Fd6|!_@OD^g>Dt)@0=mL04vfP%N',
	'SECURE_AUTH_SALT'		=> 'ns-Cc@[$`{|8Gl(P-Zbce2]45Tg~`CrCVh+,j+T*TZYb6eV&?-4e{#QV/[25?{&',
	'LOGGED_IN_SALT'		=> '1K19o~~G* -Y{[k1V{[}^(UNUoKTN1lYV678 ,2g+Q7ts|s|{iA5mVVzow[KsyAZ',
	'NONCE_SALT'			=> 'LO__E-RH!j@OS=I8ljB0X^z?rm&JoXv0K<&#y;42LHBG6[XH$T^k{H$LcH{4T6Tf',

	// Security Directives
	'DISALLOW_FILE_EDIT'	=> true,
	'FORCE_SSL_LOGIN'		=> false,
	'FORCE_SSL_ADMIN'		=> false,

	// Performance
	'DISABLE_WP_CRON'		=> false, // We always disable cron on large installs
	'WP_MEMORY_LIMIT'		=> '96M',
	'WP_MAX_MEMORY_LIMIT'	=> '256M',
	'WP_CACHE'				=> false,
	//'WPCACHEHOME'			=> dirname(__FILE__).'/content/plugins/wp-super-cache/',

	// Debug
	'WP_DEBUG'				=> false,
	'WP_DEBUG_LOG'			=> false,
	'WP_DEBUG_DISPLAY'		=> false,
	'SAVEQUERIES'			=> false,
	'SCRIPT_DEBUG'			=> false,
	'CONCATENATE_SCRIPTS'	=> true,
	'COMPRESS_SCRIPTS'		=> true,
	'COMPRESS_CSS'			=> true,

);

foreach ($config_defaults AS $config_default_key => $config_default_value ) {
	if ( !defined($config_default_key) )
		define( $config_default_key, $config_default_value );
}

// Manually back up the WP_DEBUG_DISPLAY directive.
if ( !defined('WP_DEBUG_DISPLAY') || WP_DEBUG_DISPLAY == false ) {
	ini_set( 'display_errors', 0 );
}

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
if ( empty( $table_prefix ) ) {
	$table_prefix  = 'fl_';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
