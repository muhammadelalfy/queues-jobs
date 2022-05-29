<?php

namespace App\Orders;
use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentgateway;

    public function __construct(PaymentGatewayContract $paymentGatewayContract){

        $this->paymentgateway =  $paymentGatewayContract ;
    }

    public function all(){

            $this->paymentgateway->setDiscount(1000);

        return[

            'name' => 'muhammad',
            'address'=>'12 huda st'
        ];
    }
}
