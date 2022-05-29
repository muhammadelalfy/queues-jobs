<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\helpers\helpers;

class SendMessageExpireSubScriptionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

        private $customer;
        private $expired;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($customer , $expired)
    {
        $this->customer = $customer;
        $this->expired = $expired;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sendEmail('template' , $this->customer->email , 'title' ,  $this->customer);
    }
}
