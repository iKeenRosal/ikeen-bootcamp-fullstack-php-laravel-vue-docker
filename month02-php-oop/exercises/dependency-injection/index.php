<?php

require_once 'Logger.php';
require_once 'FileLogger.php';
require_once 'UserService.php';

$logger = new FileLogger();
$service = new UserService($logger);

$service->register("hello@example.com");
