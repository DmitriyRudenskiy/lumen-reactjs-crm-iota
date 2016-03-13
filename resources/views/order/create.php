<?php
$title = 'График исполнения';
$menu = 'order_create';
?>

<?php include '../resources/views/layout/top.php' ?>
<?php include '../resources/views/layout/_menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" method="post" action="<?= route('order_insert') ?>">

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Заказчик</label>
                        <div class="col-sm-8">
                            <select  name="customer_id" class="form-control" required>
                                <option value="">-</option>
                                <?php foreach ($customer as $value) : ?>
                                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Наименование заказа</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Спецификация</label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Количество</label>
                        <div class="col-sm-4">
                            <input type="text" name="amount" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Цена (руб)</label>
                        <div class="col-sm-4">
                            <input type="text" name="price" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Итого</label>
                        <div class="col-sm-8">
                            <input type="text" name="sum" class="form-control" placeholder="что это такое" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Дата получения тиража план</label>
                        <div class="col-sm-8">
                            <div class="input-group date">
                                <input type="text" name="ready" class="form-control datepicker" required>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Где лежит файл</label>
                        <div class="col-sm-8">
                            <input type="text" name="path" class="form-control" required>
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