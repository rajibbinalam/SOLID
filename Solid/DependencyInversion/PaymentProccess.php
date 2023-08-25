<?php

namespace App\Solid\DependencyInversion;

class PaymentProccess{

    protected $paymentMethod;

    public function __construct(PaymentMethodInterface $paymentMethod){
        $this->paymentMethod = $paymentMethod;
    }


    public function pay(){
        $this->paymentMethod->makePayment();
    }
}

$payment = new PaymentProccess(
    new PaypalPaymentMethod()
);

$payment->pay();

