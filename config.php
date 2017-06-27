<?php
require 'environment.php';

define("BASE_URL", "http://localhost/galeria");
global $config;
$config = array();
if(ENVIRONMENT == "development") {
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'admin';
	$config['dbpass'] = 'admin';
} else {
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'curso';
	$config['dbpass'] = 'curso';
}