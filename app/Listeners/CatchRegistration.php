<?php

namespace App\Listeners;

use App\Events\FireRegistration;
use App\Notifications\RegistrationNotification;
use App\User;

class CatchRegistration
{

    public function __construct()
    {

    }

    public function handle(FireRegistration $event)
    {
        $event->user->notify(new RegistrationNotification($event->user));
    }
}
