<?php



namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MqttMessageReceived
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $topic;
    public $message;

    public function __construct($topic, $message)
    {
        $this->topic = $topic;
        $this->message = $message;
    }
}
