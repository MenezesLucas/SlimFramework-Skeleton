<?php
/**
 *  Slim Application setting
 *  and bootstrapping
 */
// Require composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Application settings
$settings = require __DIR__ . '/../app/Settings.php';

// New Slim app instance
$app = new Slim\App( $settings );

// Add our dependencies to the container
require __DIR__ . '/../app/Dependencies.php';

// Require our route
require __DIR__ . '/../app/Routes.php';