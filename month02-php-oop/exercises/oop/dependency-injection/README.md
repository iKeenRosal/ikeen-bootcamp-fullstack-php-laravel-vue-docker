# Dependency Injection Exercise (PHP OOP)

## 🎯 Goal
Learn how **Dependency Injection (DI)** helps reduce coupling, improve testability, and make classes easier to reuse.

In this exercise, you will:
- Understand the problem DI solves
- Fix tightly-coupled code
- Inject dependencies through the constructor
- Write a simple test using a fake logger

---

## ❌ Step 1 — The Problem (Tight Coupling)

Open `UserService.php` and look at the original code:

```php
<?php

class UserService
{
    public function register(string $email): void
    {
        $logger = new FileLogger(); // ❌ Hard-coded dependency

        $logger->log("Registering user: {$email}");

        // Imagine saving to a DB here...
    }
}
```
