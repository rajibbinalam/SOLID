<?php

namespace App\Solid\DependencyInversion;

class PaypalPaymentMethod implements PaymentMethodInterface{
    public function makePayment(){
        return;
    }
}
