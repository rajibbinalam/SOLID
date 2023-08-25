<?php

namespace App\Solid\OpenCloseResponsibility\PaymentMethodExample;


class PaypalPaymentMethod implements PaymentMethodInterface{
    public function makePayment()
    {
        return 'Paypal Payment Method';
    }
}

