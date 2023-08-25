<?php

namespace App\Solid\OpenCloseResponsibility\PaymentMethodExample;

class CodPaymentMethod implements PaymentMethodInterface{
    public function makePayment()
    {
        return 'Cash on delivery';
    }
}
