<?php
$title = 'Редактирование пользователя';
$menu = 'user';
?>

<?php include '../resources/views/layout/top.php' ?>
<?php include '../resources/views/layout/_menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" method="post" action="<?= route('customer_update') ?>">
                    <input type="hidden" name="id" value="<?= $customer->id ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Имя</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" value="<?= $customer->name ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include '../resources/views/layout/button.php'; ?>