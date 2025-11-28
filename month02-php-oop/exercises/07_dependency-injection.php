<?php

/**
 * Dependency Injection Starter (Plain PHP)
 *
 * Goal:
 *  - Understand why dependency injection exists
 *  - Inject dependencies instead of hardcoding them
 *  - Swap implementations without modifying consumer class
 */

// 1. Define a Logger interface (contract)
interface LoggerInterface
{
    public function log(string $message): void;
}

// 2. Concrete implementation #1
class FileLogger implements LoggerInterface
{
    private string $file;

    public function __construct(string $filePath)
    {
        $this->file = $filePath;
    }

    public function log(string $message): void
    {
        file_put_contents($this->file, date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND);
    }
}

// 3. Concrete implementation #2
class ConsoleLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "[LOG]: " . $message . PHP_EOL;
    }
}

// 4. A class that depends on a Logger — **but not tied to any specific one**
class UserService
{
    private LoggerInterface $logger;

    // Dependency Injection happens here
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function register(string $username): void
    {
        // pretend to insert into DB, send email, etc.

        // Log using any injected logger
        $this->logger->log("User '{$username}' registered successfully.");
    }
}

// -------------------------------------------------------
// HOW TO USE (Students will experiment here)
// -------------------------------------------------------

// Example 1: Inject FileLogger
$fileLogger = new FileLogger(__DIR__ . '/app.log');
$userService = new UserService($fileLogger);
$userService->register("keen_rosal");
echo "Check app.log for output.\n";

// Example 2: Inject ConsoleLogger
$consoleLogger = new ConsoleLogger();
$userService2 = new UserService($consoleLogger);
$userService2->register("maria_santos");
echo "Check terminal output.\n";

/**
 * Student Exercises:
 *
 * 1. Create a DatabaseLogger that logs messages into MySQL or SQLite.
 * 2. Create a NullLogger (does nothing).
 * 3. Swap the logger without changing UserService code.
 * 4. Add EmailService—inject the logger there too.
 * 5. BONUS: Build a simple "container" that creates objects automatically.
 */
