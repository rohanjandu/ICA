<?php
define('POSTGRES_DB', 'myappdb');
define('POSTGRES_USER', 'ica2');
define('POSTGRES_PASSWORD', 'root');
define('POSTGRES_HOST', '34.69.255.58');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');
