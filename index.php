<?php
// require_once("./configs/config.php");
// require_once("./configs/database.php");
foreach (glob(__DIR__ . '/configs/*.php') as $fileName) {
              require_once $fileName;
}
foreach (glob(__DIR__ . '/Core/*.php') as $fileName) {
              require_once $fileName;
}
// Initialize the router before loading route definitions
$router = null;

foreach (glob(__DIR__ . '/app/Models/*.php') as $fileName) {
              require_once $fileName;
}
foreach (glob(__DIR__ . '/app/Controllers/*.php') as $fileName) {
              require_once $fileName;
}

// Create router instance
$router = new Router();

// Load route definitions (will use the $router instance above)
foreach (glob(__DIR__ . '/routers/*.php') as $fileName) {
              require_once $fileName;
}

// Determine request path dynamically without hardcoding project name
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';

// Remove base path of the application from requestUri
$basePath = rtrim(str_replace('index.php', '', $scriptName), '/');
$path = parse_url($requestUri, PHP_URL_PATH);
if ($basePath && strpos($path, $basePath) === 0) {
              $path = substr($path, strlen($basePath));
}
$path = '/' . ltrim($path, '/');
if ($path === '') {
              $path = '/';
}

$methodRes = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$router->xulyPath($methodRes, $path);
