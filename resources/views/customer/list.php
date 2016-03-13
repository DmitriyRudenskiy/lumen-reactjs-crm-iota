<?php
$title = 'Список заказчиков';
$menu = 'customer';
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


                <div>
                    <form class="form-inline" method="post" action="<?= route('customer_update') ?>">
                        <div class="form-group">
                            <label>Новый заказчик</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Создать</button>
                    </form>
                </div>

                <h2>Список полдьзователй</h2>
                <table class="table table-striped table-hover">
                    <tbody>
                    <?php foreach ($list as $value) : ?>
                        <tr>
                            <td><?= $value->email ?></td>
                            <td><?= $value->name ?></td>
                            <td class="text-right"><a href="<?= route('customer_view', ['id' => $value->id]) ?>" class="btn btn-link"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include '../resources/views/layout/button.php'; ?>