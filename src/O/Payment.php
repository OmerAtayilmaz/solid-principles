<?php

//basit bir örnek daha;
interface PaymentMethodInterface{
    public function process();
}

class CashPayment implements PaymentMethodInterface{
    public function process()
    {
        return 'Cash Payment';
    }
}

class CreditCardPayment implements PaymentMethodInterface{
    public function process()
    {
        return 'Credit Card Payment';
    }
}


class Checkout{
    public function __construct(private PaymentMethodInterface $paymentMethod){
        
    }

    public function begin()
    {
        return $this->paymentMethod->process();
    }
}