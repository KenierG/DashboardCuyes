<?php

namespace App\Console\Commands;

use App\Events\MqttMessageReceived;

use Illuminate\Console\Command;
use Bluerhinos\phpMQTT;

class MqttSubscribeCommand extends Command
{
    protected $signature = 'mqqt_listener {usuario?}{cridaero?}{galpon?}{cuy?}';
    protected $description = 'Este comando funciona para escuchar las nuevas entradas de datos a traves del prtocolo mqtt';

    public function handle()
    {
        $mqtt = new phpMQTT('test.mosquitto.org', 1883, 'laravel-subscriber'); //ip, puerto, cliente
        if ($mqtt->connect()) {
            $topics['balanza/peso'] = ['qos' => 0, 'function' => [$this, 'processMessage']];
            $mqtt->subscribe($topics, 0);

            while ($mqtt->proc()) {
                // El bucle está en ejecución, maneja las interrupciones o realiza otras tareas si es necesario.
            }

            $mqtt->close();
        } else {
            $this->error('Unable to connect to MQTT broker.');
        }
    }


    // ...

    public function processMessage($topic, $msg)
    {
        $this->info(sprintf('Received message on topic [%s]: %s', $topic, $msg));
        $this->saveMessageToDatabase($topic, $msg);

        // Disparar el evento Laravel
        event(new MqttMessageReceived($topic, $msg));
    }
    protected function saveMessageToDatabase($topic, $message)
    {

        $newPeso = new \App\Models\dataCuy();
        $newPeso->age = "1";
        $newPeso->size_width = 0.43;
        $newPeso->size_heigth = 0.43;
        $newPeso->weigth = $message;
        $newPeso->save();
    }
}
