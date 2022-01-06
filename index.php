<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');
Router::post('settings', 'SecurityController');
Router::post('settings_action', 'SecurityController');
Router::get('compass', 'SecurityController');
Router::get('compass_action', 'SecurityController');
Router::post('results', 'SecurityController');
Router::post('logout', 'SecurityController');
Router::post('about_us', 'DefaultController');

Router::run($path);