<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $table = 'printer';

    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo('App\Models\PrinterType', 'type_id');
    }

    public function __toString()
    {
        return $this->name;
    }
}
