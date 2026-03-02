<?php

namespace App\Listeners\Order;

use App\Events\Order\ExcursionOrderAdminEvent;
use App\Jobs\Order\ExcursionOrderAdminJob;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class ExcursionOrderAdminHandlerListener
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
    public function handle(ExcursionOrderAdminEvent $event): void
    {
        ExcursionOrderAdminJob::dispatch($event->order); // Job
    }
}
