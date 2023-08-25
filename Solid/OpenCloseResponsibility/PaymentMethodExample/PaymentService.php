<?php

namespace App\Solid\OpenCloseResponsibility\PaymentMethodExample;

class PaymentService{

    public function pay(PaymentMethodInterface $paument){
        return $paument->makePayment();
    }
}
