<?php namespace App\I;


interface PaymentProcessor{
    public function payOnline($amount);
    public function refund($amount);
    public function validateCard($cardNumber);
    public function payInStore($amount);
}

class OnlniePayment implements PaymentProcessor{
    
    public function payOnline($amount)
    {
        echo "Paying $amount online";
    }

    public function refund($amount)
    {
        echo "Refunding $amount online";
    }

    public function validateCard($cardNumber)
    {
        echo "Validating card $cardNumber online";
    }

    // This method is not supported by this class, this violates the Interface Segregation Principle
    public function payInStore($amount)
    {
        throw new \Exception("Method not supported");
    }
}