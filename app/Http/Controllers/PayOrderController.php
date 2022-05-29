<?php

namespace App\Http\Controllers;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway){
//        $paymentGateway = new PaymentGateway('usd');
        $orderDetails->all();
        $df = $paymentGateway->charge(2500);
        dd($df);
    }
//    public function timeZone(){
//        dd(Timezone::convertToLocal($post->created_at));
//    }
}
