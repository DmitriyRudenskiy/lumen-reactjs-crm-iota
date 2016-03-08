<!DOCTYPE html>
<html>
    <body>
    <h3>Заказ</h3>
    <hr>
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

    <h3>Ответ</h3>
    <hr>
    <p>Автор: <?= $answer->user ?></p>
    <p>Телефон покупателя: <?= $answer->order->phone ?></p>
    <p><a href="<?= env('OUT_LINK') . $answer->id ?>" target="_blank">смотреть</a></p>
    </body>
</html>

