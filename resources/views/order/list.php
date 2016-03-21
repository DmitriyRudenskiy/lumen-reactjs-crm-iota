<?php
$title = 'График исполнения';
$menu = 'order_list'
?>

<?php include '../resources/views/layout/top.php' ?>
<?php include '../resources/views/layout/_menu.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if (!empty($success)) : ?>
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Данные пользователя успешно сохранены
                    </div>
                <?php endif; ?>

                <p class="text-center"><button type="button" class="btn btn-primary">Поиск по заказам</button></p>

                <h2>Список полдьзователй</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-hover">
                    <thead>
                    <th></th>
                    <th>Заказчик</th>
                    <th>Наименование заказа</th>
                    <th>Тираж, шт.</th>
                    <th>Дата подачи заявки</th>
                    <th>Наименование загружаемой машины</th>
                    <th>Срок изготовления заказа, дни</th>
                    <?php for($i= -10; $i < 10; $i++) : ?>
                        <th><?= date("d.m", strtotime("+" . $i . "days")) ?></th>
                    <?php endfor; ?>
                    </thead>
                    <tbody>
                    <?php foreach ($list as $value) : ?>
                        <tr <?= ($value->task->count() > 0) ? 'class="success"' : 'class="danger"' ?>>
                            <td><a href="<?= route('order_view', ['id' => $value->id]) ?>" class="btn btn-link"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                            <td><?= $value->customer ?></td>
                            <td><?= $value->name ?></td>
                            <td><?= $value->amount ?></td>
                            <td><?= date("d.m.Y", strtotime($value->created_at)) ?></td>
                            <td>--</td>
                            <td>--</td>
                            <?php for($i= -10; $i < 10; $i++) : ?>
                                <td>--</td>
                            <?php endfor; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include '../resources/views/layout/button.php'; ?>