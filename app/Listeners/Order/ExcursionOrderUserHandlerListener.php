<?php

namespace App\Listeners\Order;

use App\Events\Order\ExcursionOrderUserEvent;
use App\Jobs\Order\ExcursionOrderUserJob;
use Illuminate\Support\Facades\Log;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class ExcursionOrderUserHandlerListener
{
    use EmailAddressCollector;
    use CreatorToken;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * сообщение
     */
    public function handle(ExcursionOrderUserEvent $event): void
    {

        Log::alert('This Listeners');
        Log::alert($event->order->email);
        Log::alert($event->order->order["items"]);
        ExcursionOrderUserJob::dispatch($event->order); // Job
    }
}
