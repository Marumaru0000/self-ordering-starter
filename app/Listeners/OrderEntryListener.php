<?php

namespace App\Listeners;

use App\Notifications\OrderEntryNotification;
use Illuminate\Support\Facades\Notification;
use Revolution\Ordering\Events\OrderEntry;

class OrderEntryListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderEntry $event): void
    {
        info('Order ID : '.$event->order_id);
        info($event->memo, $event->items);
        info('options', $event->options);

//        Notification::route('line', '')
//                    ->notify(new OrderEntryNotification($event));
    }
}
