<?php
/** Goal
 * + Identify code smells
 * + Break responsibilities into classes
 * + Apply SOLID in micro-examples
 */

class User
{
    public function save() { /* writes to DB */ }

    public function sendWelcomeEmail() { /* sends email */ }
}

// TODO: Refactor into:
// UserRepository handles save()
// EmailService handles email sending


