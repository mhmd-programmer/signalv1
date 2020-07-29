<?php

namespace App\Listeners;

use App\Events\BroadEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BroadList
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BroadEvent  $event
     * @return void
     */
    public function handle(BroadEvent $event)
    {
        return $event;
    }
}
