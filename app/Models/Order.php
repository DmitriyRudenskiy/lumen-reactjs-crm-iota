<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function getList()
    {
        return self::all();
    }

    public function get($id)
    {
        return self::find($id);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function task()
    {
        return $this->hasMany('App\Models\Task', 'order_id');
    }
}
