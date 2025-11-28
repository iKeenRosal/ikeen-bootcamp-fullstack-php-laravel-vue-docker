<?php

trait LoggerTrait
{
    public function log(string $msg)
    {
        echo "[LOG] $msg\n";
    }
}

class OrderService
{
    use LoggerTrait;

    public function process()
    {
        $this->log("Processing order...");
    }
}

class UserService
{
    use LoggerTrait;

    public function register()
    {
        $this->log("Registering user...");
    }
}

// TODO: Instantiate and call methods to see trait logging.
