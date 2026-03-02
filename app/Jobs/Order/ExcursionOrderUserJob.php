<?php

namespace App\Jobs\Order;

use App\Mail\Order\ExcursionOrderUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class ExcursionOrderUserJob implements ShouldQueue
{
    use Queueable;
    use EmailAddressCollector;
    use CreatorToken;

    public function __construct(public  ?object $data)
    {

    }

    public function handle(): void
    {
        Log::alert('This Job');
        Log::alert($this->data);
        Log::alert($this->data->order["items"]);

        Mail::to($this->data->email)->send(new ExcursionOrderUserMail($this->data));
    }

}
