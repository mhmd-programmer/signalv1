<?php

namespace App\Listeners;

use App\Events\AuthMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail
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
     * @param  AuthMail  $event
     * @return void
     */
    public function handle(AuthMail $event)
    {
        return event(new AuthMail($event));
    }
}
