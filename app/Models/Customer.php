<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    public $timestamps = false;

    public function getList()
    {
        return self::orderBy('name')->get();
    }

    public function get($id)
    {
        return self::find($id);
    }

    public function __toString()
    {
        return $this->name;
    }
}
