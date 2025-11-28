<?php

class UserService
{
    public function __construct(
        private Logger $logger
    ) {}

    public function register(string $email): void
    {
        $this->logger->log("Registering user: {$email}");
    }
}
