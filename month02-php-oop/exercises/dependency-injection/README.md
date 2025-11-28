# **README.md — Dependency Injection (PHP) Exercise**

# Dependency Injection — PHP OOP Exercise

In this exercise, you will learn one of the most important Object-Oriented Programming concepts: **Dependency Injection (DI)**.

Dependency Injection makes your code:

* easier to test
* easier to extend
* easier to maintain
* less tightly coupled

This exercise teaches DI in **pure PHP**, without using frameworks (Laravel / Symfony).
Once you understand it here, you’ll be able to understand DI containers in frameworks easily.

---

# 📌 **What You Will Build**

You will build:

* A `Logger` interface
* Two logger implementations:

  * `FileLogger`
  * `DatabaseLogger` (simulated)
* A `UserService` class that **depends on** a logger
* A demonstration of injecting different loggers into the same service

---

# 📂 Project Structure

```
oop/
└── dependency-injection/
    ├── LoggerInterface.php
    ├── FileLogger.php
    ├── DatabaseLogger.php
    ├── UserService.php
    ├── index.php
    └── README.md
```

---

# 🧠 **Concept Overview**

### **❌ Without Dependency Injection (wrong way)**

Classes create their own dependencies:

```php
class UserService {
    private $logger;

    public function __construct() {
        $this->logger = new FileLogger(); // hardcoded
    }
}
```

Problems:

* Cannot replace the logger
* Cannot test it easily
* Service becomes tightly coupled to FileLogger

---

### **✅ With Dependency Injection (correct way)**

The dependency is passed **from the outside**:

```php
class UserService {
    public function __construct(private LoggerInterface $logger) {}

    public function createUser(string $name)
    {
        // ...
        $this->logger->log("Created user: {$name}");
    }
}
```

Benefits:

* Swap loggers easily
* Test with mocks
* Cleaner architecture
* Code follows SOLID principles (D = Dependency Inversion)

---

# 🧪 **Exercise Instructions**

## **1. Create an interface**

`LoggerInterface.php`:

```php
<?php

interface LoggerInterface
{
    public function log(string $message): void;
}
```

---

## **2. Create two logger implementations**

### FileLogger

```php
<?php

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        file_put_contents('app.log', $message . PHP_EOL, FILE_APPEND);
    }
}
```

### DatabaseLogger (simulated)

```php
<?php

class DatabaseLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "[DB] Saved log: {$message}\n";
    }
}
```

---

## **3. Create the UserService that receives the logger**

```php
<?php

class UserService
{
    public function __construct(private LoggerInterface $logger) {}

    public function createUser(string $username)
    {
        // simulate saving user
        $this->logger->log("User created: {$username}");
    }
}
```

---

## **4. Tie everything together**

`index.php`:

```php
<?php

require_once 'LoggerInterface.php';
require_once 'FileLogger.php';
require_once 'DatabaseLogger.php';
require_once 'UserService.php';

// Swap FileLogger with DatabaseLogger to see different behavior:

$logger = new FileLogger();
// $logger = new DatabaseLogger();

$service = new UserService($logger);
$service->createUser('keen');
```

Run:

```
php index.php
```

---

# 📝 **Your Task**

### ✔ Step 1

Create all interface + classes.

### ✔ Step 2

Inject different loggers into `UserService` and observe the results.

### ✔ Step 3

Add a **third logger implementation** (you choose the style).
Examples:

* SlackLogger
* ArrayLogger
* JsonFileLogger
* HttpLogger

### ✔ Step 4 (optional, advanced)

Build a very small **manual DI container:**

```php
$container = [
    LoggerInterface::class => new FileLogger(),
];

$service = new UserService($container[LoggerInterface::class]);
```

---

# 🎯 **Learning Outcomes**

By the end, you will understand:

* What dependency injection is
* Why DI makes code cleaner
* How to follow SOLID principles
* How frameworks automatically wire dependencies
* How to test services with mocks

---

# 📘 Want to go further?

After this exercise, you can explore:

* Laravel service container (`app()->bind(...)`)
* Symfony autowiring
* PHP-DI library
* Constructor vs Property vs Method injection
* Inversion of Control containers
