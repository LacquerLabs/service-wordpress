<?php

define('DB_NAME',			(getenv('WORDPRESS_DB_NAME', true) ?: getenv('WORDPRESS_DB_NAME')));
define('DB_USER',			(getenv('WORDPRESS_DB_USER', true) ?: getenv('WORDPRESS_DB_USER')));
define('DB_PASSWORD',		(getenv('WORDPRESS_DB_PASSWORD', true) ?: getenv('WORDPRESS_DB_PASSWORD')));
define('DB_HOST',			(getenv('WORDPRESS_DB_HOST', true) ?: getenv('WORDPRESS_DB_HOST')));

define('DB_CHARSET', 		(getenv('DB_CHARSET')=='' ? 'utf8mb4' : getenv('DB_CHARSET')));
define('DB_COLLATE', 		(getenv('DB_COLLATE')=='' ? 'utf8_general_ci' : getenv('DB_COLLATE')));

define('AUTH_KEY',			(getenv('WORDPRESS_AUTH_KEY')=='' ? '' : getenv('WORDPRESS_AUTH_KEY')));
define('SECURE_AUTH_KEY', 	(getenv('WORDPRESS_SECURE_AUTH_KEY')=='' ? '' : getenv('WORDPRESS_SECURE_AUTH_KEY')));
define('LOGGED_IN_KEY',		(getenv('WORDPRESS_LOGGED_IN_KEY')=='' ? '' : getenv('WORDPRESS_LOGGED_IN_KEY')));
define('NONCE_KEY',			(getenv('WORDPRESS_NONCE_KEY')=='' ? '' : getenv('WORDPRESS_NONCE_KEY')));
define('AUTH_SALT',			(getenv('WORDPRESS_AUTH_SALT')=='' ? '' : getenv('WORDPRESS_AUTH_SALT')));
define('SECURE_AUTH_SALT',	(getenv('WORDPRESS_SECURE_AUTH_SALT')=='' ? '' : getenv('SWORDPRESS_ECURE_AUTH_SALT')));
define('LOGGED_IN_SALT',	(getenv('WORDPRESS_LOGGED_IN_SALT')=='' ? '' : getenv('WORDPRESS_LOGGED_IN_SALT')));
define('NONCE_SALT',		(getenv('WORDPRESS_NONCE_SALT')=='' ? '' : getenv('WORDPRESS_NONCE_SALT')));

define('WP_DEBUG',			(getenv('WP_DEBUG')=='' ? false : (getenv('WP_DEBUG')==true)));

$table_prefix  = (getenv('WP_TABLE_PREFIX')=='' ? 'wp_' : getenv('WP_TABLE_PREFIX'));

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
