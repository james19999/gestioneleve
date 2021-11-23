<?php

namespace App\Listeners;

use App\Events\ClasseEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ClasseListener
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
     * @param  ClasseEvent  $event
     * @return void
     */
    public function handle(ClasseEvent $event)
    {
        dd($event);
    }
}
