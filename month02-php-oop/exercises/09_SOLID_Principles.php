<?php
/** Goal
 * + Identify code smells
 * + Break responsibilities into classes
 * + Apply SOLID in micro-examples
 *   S - Single Responsibility Principle (SRP)
 *   O - Open/Closed Principle (OCP)
 *   L - Liskov Substitution Principle (LSP)
 *   I - Interface Segregation Principle (ISP)
 *   D - Dependency Inversion Principle (DIP)
 */

class User
{
    public function save() { /* writes to DB */ }

    public function sendWelcomeEmail() { /* sends email */ }
}

// TODO: Refactor into:
// UserRepository handles save()
// EmailService handles email sending


