<?php

namespace App\Jobs\Order;

use App\Mail\Order\ExcursionOrderAdminMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class ExcursionOrderAdminJob implements ShouldQueue
{
    use Queueable;
    use EmailAddressCollector;
    use CreatorToken;

    public function __construct(public  ?object $data)
    {

    }

    public function handle(): void
    {
        Mail::to($this->emails())->send(new ExcursionOrderAdminMail($this->data));
    }

}
