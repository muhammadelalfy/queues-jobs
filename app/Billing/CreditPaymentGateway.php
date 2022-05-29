<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract
{

    private $currency ;
    private $discount;

    public function __construct($currency){

        $this->currency = $currency;

    }
    public function setDiscount($amount){

            $this->discount = $amount;
    }
    public function charge($amount){
        $fees = .03;
        return[

            'amount'=>$amount - $this->discount + $fees,
            'confirmation_number' => Str::random(40),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees
        ];
    }
}
