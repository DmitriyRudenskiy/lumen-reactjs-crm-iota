<?php
namespace App\Component;


use App\Models\Catalog\City;
use App\Models\Catalog\Warehouse;
use App\Models\Product\Answer;
use App\Models\Product\Order;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiViewResponse
{
    protected $result;

    public function __construct($id)
    {
        $answer = Answer::find($id);

        if ($answer === null) {
            throw new ModelNotFoundException();
        }

        $item = [
            'id' => $answer->id,
            'image' => (!empty($answer->image)) ? 'http://' . $_SERVER['SERVER_NAME'] . '/api/' . $answer->image : null,
            'description' => $answer->description,
            'maker' => $answer->maker,
            'price' => (int)round($answer->price * 1.1),
            'is_original' => null,
            'number' => !empty($answer->part) ? (mb_substr($answer->part, 0, 1, 'UTF8') . '****' . mb_substr($answer->part, -1, 1, 'UTF8'))  : null,
            'type' => (!empty($answer->type_id)) ? $this->getType()[$answer->type_id] : null,
            'callback' => (!empty($answer->callback_id)) ? $this->getCallback()[$answer->callback_id] : null,
            'order_id' => $answer->id
        ];

        $order = Order::find($answer->order_id);
        $city = City::find($order->city_id);

        $delivery = [
            'name' => $city->name,
            'days' => $answer->delivery,
            'price_delivery' => $answer->price_delivery,
            'phone' => $order->phone,
            'email' => !empty($order->email)
                ? (explode("@", $order->email)[0] . '@********')
                : null
        ];


        if (!empty($answer->address)) {
            $delivery['warehouse'] = [$answer->address];
        } else {
            $delivery['warehouse'] = (new Warehouse())->getListModel($city->id);
        }

        $this->result = [
            'item' => $item,
            'delivery' => $delivery
        ];
    }

    public function get()
    {
        if ($this->result !== null) {
            return $this->result;
        }

        return '';

    }

    protected function getType()
    {
        return [
            1 => "новая оригинал",
            2 => "новая аналог",
            3 => "БУ - отличное состояние",
            4 => "БУ - хорошее состояние",
            5 => "БУ - есть повреждения",
            6 => "Контракт - отличное состояние",
            7 => "Контракт - хорошее состояние",
            8 => "Контракт - есть повреждения"
        ];

    }

    protected function getCallback()
    {
        return [
            1 => "нет возврата",
            2 => "3 дня с получения",
            3 => "7 дней с получения",
            4 => "14 дней с получения",
            5 => "более 14 дней с получения"
        ];
    }
}