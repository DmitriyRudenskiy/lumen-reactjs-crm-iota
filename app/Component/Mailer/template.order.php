<!DOCTYPE html>
<html>
    <body>
    <p>Автор: <?= $order->user?></p>
    <p>Имя покупателя: <?= (!empty($order->name)) ? $order->name : 'не указано' ?></p>
    <p>Телефон: <?= (!empty($order->phone)) ? $order->phone : 'не указано' ?></p>
    <p>Email: <?= (!empty($order->email)) ? $order->email : 'не указано' ?></p>
    <p>Город покупателя: <?= $order->city ?></p>
    <p>Запчасть: <?= (!empty($order->part)) ? $order->part : 'не указано' ?></p>
    <p>Марка: <?= $order->maker ?></p>
    <p>Модель: <?= $order->model ?></p>
    <p>VIN/FRAME: <?= (!empty($order->code)) ? $order->code : 'не указано' ?></p>
    <p>Объем двигателя: <?= (!empty($order->driver)) ? $order->driver : 'не указано' ?></p>
    <p>Год выпуска: <?= (!empty($order->year)) ? $order->year : 'не указано' ?></p>
    <p>Моя комиссия (руб.): <?= (!empty($order->bonus)) ? $order->bonus : 'не указано' ?></p>
    </body>
</html>

