<?php

namespace App\Events\Order;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ExcursionOrderUserEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public ?object $order;
    /**
     * Create a new event instance.
     * Создайте новый экземпляр события.
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

}
