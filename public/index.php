<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$frameworkMaintenance = __DIR__.'/../storage/framework/maintenance.php';

if (file_exists($maintenance = $frameworkMaintenance)) { require $maintenance; } // Determine if the application is in maintenance mode

require __DIR__.'/../vendor/autoload.php'; // Register the Composer autoloader

(require_once __DIR__.'/../bootstrap/app.php')->handleRequest(Request::capture()); // Bootstrap Laravel and handle the request
