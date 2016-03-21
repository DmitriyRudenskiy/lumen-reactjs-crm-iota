<?php
namespace App\Services;

use App\Models\Task;

class PrinterService
{
    private $list = [];

    public function report()
    {
        $start = null;
        $finish = null;

        $tmp = (new Task())->getReport();

        if ($tmp->count() < 1) {
            return [];
        }

        $this->list = [];

        foreach ($tmp as $value) {
            $this->addToReport($value);
        }

        return $this->list;
    }

    protected function addToReport(Task $task)
    {
        if (!isset($this->list[$task->printer_id])) {
            $this->list[$task->printer_id] = (object)[
                'name' => $task->printer,
                'sum' => 0,
                'items' => []
            ];
        }

        $this->list[$task->printer_id]->sum += (int)$task->price;
        $this->list[$task->printer_id]->items[] = (object)[
            'name' => $task->order->customer . ' ' . $task->order->name,
            'price'=> (int)$task->price,
            'start' => $task->start_work
        ];
    }

}