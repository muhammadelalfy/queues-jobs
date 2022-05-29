<?php

namespace App\Console\Commands;

use App\Jobs\SendMessageExpireSubScriptionJob;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SubscriptionExpireDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:subscriptionExpireDate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $customers_end_subscription = Customer::where('subscription_end_date' ,'<', now())->get();
        info('iam here in command line 34');
//        dd($customers_end_subscription);
        foreach ($customers_end_subscription as $end_dates){
           $expire_date = Carbon::createFromFormat('Y-m-d' , $end_dates->subscription_end_date)->toDateString();
            dispatch(new SendMessageExpireSubScriptionJob($customers_end_subscription , $expire_date))->onQueue('AHMED');
        }
    }
}
