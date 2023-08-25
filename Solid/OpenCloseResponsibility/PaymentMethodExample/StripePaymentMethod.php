<?php

namespace App\Solid\OpenCloseResponsibility\PaymentMethodExample;


class StripePaymentMethod implements PaymentMethodInterface{
    public function makePayment()
    {
        return 'Stripe Payment Method';
    }
}

