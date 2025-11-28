<?php

interface NotifierInterface
{
    public function send(string $message): void;
}

class EmailNotifier implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "📧 Email sent: {$message}<br>";
    }
}

class SMSNotifier implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "📱 SMS sent: {$message}<br>";
    }
}

class PushNotifier implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "🔔 Push notification: {$message}<br>";
    }
}

/**
 * Polymorphism:
 * The function does NOT care which notifier it receives.
 * As long as it implements NotifierInterface, it will work.
 */
function sendWelcomeMessage(NotifierInterface $notifier): void
{
    $notifier->send("Welcome to our platform!");
}

// ------------------------------
// Demo
// ------------------------------

echo "<h2>Polymorphism with Interfaces</h2>";
echo "<p>All notifiers implement the same interface, so they are interchangeable.</p>";

$notifiers = [
    new EmailNotifier(),
    new SMSNotifier(),
    new PushNotifier(),
];

foreach ($notifiers as $notifier) {
    sendWelcomeMessage($notifier);
}

echo "<hr>";
echo "<h3>Try creating your own notifier class!</h3>";
echo "<p>Example: SlackNotifier, DiscordNotifier, WhatsAppNotifier, etc.</p>";
