<?php

namespace App\Solid\DependencyInversion;

class StripePaymentMethod implements PaymentMethodInterface{
    public function makePayment(){
        return;
    }
}
