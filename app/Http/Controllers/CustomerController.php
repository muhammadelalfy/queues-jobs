<?php

namespace App\Http\Controllers;
use App\Billing\PaymentGatewayContract;
use App\Models\Customer;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CustomerController
{
    public function store(Request $request){
//        $customers = Customer::where('national_id' ,$request->national_id )->first();
        $customers = Redis::get('laravel_database_national_'.$request->national_id);
        if ($customers){
            info('line 15 update');
            $customers->update($request->all());
            }
        else{
            info('line 20 create');

            Customer::create($request->all());
        }
    }

}
