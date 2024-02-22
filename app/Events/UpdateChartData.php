<?php
// app/Events/UpdateChartData.php
namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UpdateChartData
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $chartData;

    public function __construct($chartData)
    {
        $this->chartData = $chartData;
    }
}
