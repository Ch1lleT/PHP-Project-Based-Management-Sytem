<?php

namespace App\Listeners;

use App\Utilities\Logger;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserCreatedEvent;
class UserCreatedListener
{

    protected $logger = null;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        $this->logger = new Logger();
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreatedEvent $event): void
    {
        $this->logger->Info()->User($event->userId)->Created()->byUser($event->by)->save();
    }
}
