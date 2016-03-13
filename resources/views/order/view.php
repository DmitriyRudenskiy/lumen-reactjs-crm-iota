<?php
$title = 'Редактирование пользователя';
$menu = 'user';
?>

<?php include '../resources/views/layout/top.php' ?>
<?php include '../resources/views/layout/_menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>Менеджер</td>
                        <td><?= $order->user ?></td>
                    </tr>
                    <tr>
                        <td>Дата заполнения заявки</td>
                        <td><?= date("d.m.Y", strtotime($order->created_at)) ?></td>
                    </tr>
                    <tr>
                        <td>Заказчик</td>
                        <td><?= $order->user ?></td>
                    </tr>
                    <tr>
                        <td>Наименование заказа</td>
                        <td><?= $order->name ?></td>
                    </tr>
                    <tr>
                        <td>Спецификация</td>
                        <td><?= $order->description ?></td>
                    </tr>
                    <tr>
                        <td>Количество</td>
                        <td><?= $order->amount ?></td>
                    </tr>
                    <tr>
                        <td>Цена (руб)</td>
                        <td><?= $order->price ?></td>
                    </tr>
                    <tr>
                        <td>Итого</td>
                        <td><?= $order->sum ?></td>
                    </tr>
                    <tr>
                        <td>Дата получения тиража план</td>
                        <td><?= $order->ready ?></td>
                    </tr>
                    <tr>
                        <td>Где лежит файл</td>
                        <td><?= $order->path ?></td>
                    </tr>
                    </tbody>
                </table>

                <form class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Наименование загружаемой машины</label>
                        <div class="col-sm-8">
                            <select  name="printer_id" class="form-control" required>
                                <option value="">-</option>
                                <option value="hp">hp</option>
                                <option value="xerox">xerox</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Срок изготовления заказа, дни</label>
                        <div class="col-sm-4">
                            <input type="text" name="days" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include '../resources/views/layout/button.php'; ?>