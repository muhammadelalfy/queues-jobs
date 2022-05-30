<?php

namespace App\Console\Commands;

use App\Models\Customer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class FillRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill:redis';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fill redis db';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $customers = Customer::select( 'id' , 'national_id')->get();

        if (isset($customers) &&  !empty($customers))
        {
            foreach ($customers as $customer) {

                Redis::set('national_' . $customer->national_id, $customer->id);

            }
        }
    }
}
