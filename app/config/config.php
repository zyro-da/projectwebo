<?php 

/* DEFAULT CONTROLLER SETTINGS, METHOD SETTINGS */
$config['default_controller'] = 'Home';

// THE DEFAULT IS INDEX
$config['default_method_set'] = 'index';

// config database
$config['DB_HOST'] = 'localhost';
$config['DB_USER'] = 'root';
$config['DB_PASS'] = '';
$config['DB_NAME'] = 'uts_mvc';

define('default_controller_set', $config['default_controller']);
define('default_method_set', $config['default_method_set']);

// DEFINE
// BASE URL
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
define('BASEURL', $config['base_url']);

define('DB_HOST', $config['DB_HOST']);
define('DB_USER', $config['DB_USER']);
define('DB_PASS', $config['DB_PASS']);
define('DB_NAME', $config['DB_NAME']);
?>