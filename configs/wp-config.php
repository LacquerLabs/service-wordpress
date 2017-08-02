<?php
$DATABASE_URL = getenv('DATABASE_URL', true) ?: getenv('DATABASE_URL');
$DB_CONFIG = parse_url($DATABASE_URL);

define('DB_NAME',			basename($DB_CONFIG['path']));
define('DB_USER',			basename($DB_CONFIG['user']));
define('DB_PASSWORD',		basename($DB_CONFIG['pass']));
define('DB_HOST',			basename($DB_CONFIG['host']));
define('DB_CHARSET', 		(getenv('DB_CHARSET')=='' ? 'utf8mb4' : getenv('DB_CHARSET')));
define('DB_COLLATE', 		(getenv('DB_COLLATE')=='' ? '' : getenv('DB_COLLATE')));

define('AUTH_KEY',			(getenv('AUTH_KEY')=='' ? '' : getenv('AUTH_KEY')));
define('SECURE_AUTH_KEY', 	(getenv('SECURE_AUTH_KEY')=='' ? '' : getenv('SECURE_AUTH_KEY')));
define('LOGGED_IN_KEY',		(getenv('LOGGED_IN_KEY')=='' ? '' : getenv('LOGGED_IN_KEY')));
define('NONCE_KEY',			(getenv('NONCE_KEY')=='' ? '' : getenv('NONCE_KEY')));
define('AUTH_SALT',			(getenv('AUTH_SALT')=='' ? '' : getenv('AUTH_SALT')));
define('SECURE_AUTH_SALT',	(getenv('SECURE_AUTH_SALT')=='' ? '' : getenv('SECURE_AUTH_SALT')));
define('LOGGED_IN_SALT',	(getenv('LOGGED_IN_SALT')=='' ? '' : getenv('LOGGED_IN_SALT')));
define('NONCE_SALT',		(getenv('NONCE_SALT')=='' ? '' : getenv('NONCE_SALT')));
define('WP_DEBUG',			(getenv('WP_DEBUG')=='' ? false : (getenv('WP_DEBUG')==true)));

$table_prefix  = (getenv('WP_TABLE_PREFIX')=='' ? 'wp_' : getenv('WP_TABLE_PREFIX'));

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');


