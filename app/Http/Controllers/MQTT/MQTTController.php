<?php

namespace App\Http\Controllers;

use PhpMqtt\Client\MqttClient;

class MqttController extends Controller
{
    protected $mqtt;

    public function __construct()
    {
        $this->mqtt = new MqttClient();
        $this->mqtt->setServer('localhost', 1883);
        $this->mqtt->setClientId('my-client-id');
    }

    public function connect()
    {
        $this->mqtt->connect();
    }

    public function disconnect()
    {
        $this->mqtt->disconnect();
    }

    public function publish()
    {
        $this->mqtt->publish('my-topic', 'Hello, world!');
    }

    public function subscribe()
    {
        $this->mqtt->subscribe('my-topic', function ($topic, $message) {
            // Handle message
        });
    }
}
