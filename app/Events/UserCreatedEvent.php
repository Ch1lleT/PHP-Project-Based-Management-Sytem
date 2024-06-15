<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userId;
    public $by;
    /**
     * Create a new event instance.
     */
    public function __construct(string $userId , string $by)
    {
        if(is_null($by) || is_null($userId)){
            throw new \Exception("Paramenter should not be null.");
        }

        $this->userId = $userId; 
        $this->by = $by; 
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
        ];
    }
}
