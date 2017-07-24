<?php
/**
 * Start loader configuration
 */

// Use composer autoloader to load vendor classes
require_once BASE_PATH . '/vendor/autoload.php';

/**
 * Environment variables
 */
$dotenv = new Dotenv\Dotenv(BASE_PATH . '/');
$dotenv->load();
