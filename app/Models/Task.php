<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }

    public function printer()
    {
        return $this->belongsTo('App\Models\Printer', 'printer_id');
    }
}
