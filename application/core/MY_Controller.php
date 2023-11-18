<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(FCPATH);
$dotenv->load();

define('APP_MODE', $_ENV['APP_MODE'] ?? "dev");

define('IS_PROD', APP_MODE === "prod" || APP_MODE === "production" ? true : false);

define('IS_DEV', !IS_PROD);

define('APP_VERSION', '1.0.0');
