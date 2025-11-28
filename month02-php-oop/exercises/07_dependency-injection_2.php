<?php

require_once 'helper/dependency-injection/Logger.php';
require_once 'helper/dependency-injection/FileLogger.php';
require_once 'helper/dependency-injection/UserService.php';

$logger = new FileLogger();
$service = new UserService($logger);

$service->register("hello@example.com");
