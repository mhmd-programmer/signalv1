<?php

namespace App\Listeners;

use App\Events\BeyondCode\EmailConfirmation\Events\Confirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class YourOnConfirmedListener
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
     * @param  Confirmed  $event
     * @return void
     */
    public function handle(Confirmed $event)
    {
        //
    }
}
