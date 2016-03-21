<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrinterType extends Model
{
    protected $table = 'printer_type';

    public $timestamps = false;

    public function __toString()
    {
        return $this->name;
    }
}
