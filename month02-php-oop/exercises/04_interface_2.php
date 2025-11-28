<?php

interface PaymentGateway
{
    public function charge(float $amount): string;
}

class StripePayment implements PaymentGateway
{
    public function charge(float $amount): string
    {
        return "Charging \${$amount} with Stripe";
    }
}

class PaypalPayment implements PaymentGateway
{
    public function charge(float $amount): string
    {
        return "Charging \${$amount} with PayPal";
    }
}

// TODO: Write a function that accepts PaymentGateway and calls charge().
