<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    public $timestamps = false;

    public function getList()
    {
        return self::all();
    }

    public function get($id)
    {
        return self::find($id);
    }
}
