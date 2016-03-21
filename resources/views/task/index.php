<?php
$title = 'График исполнения';
$menu = 'task_list'
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


                <h2>График загрузки машин</h2>

                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <select class="form-control" name="user_id">
                            <option value="">менеджер</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <select class="form-control" name="customer_id">
                            <option value="">заказчик</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <select class="form-control" name="printer_id>
                            <option value="">исполнитель</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Выбрать</button>
                </form>
            </div>
        </div>
    </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                    <table class="table table-striped table-hover" id="work_list" data-list="on">
                        <thead>
                            <th></th>
                            <?php foreach ($printer as $value) : ?>
                                <th><?= $value->name ?></th>
                            <?php endforeach; ?>
                        </thead>
                        <tbody>
                        <?php $start = strtotime(date("Y-m-d 00:00:00")) ?>
                        <?php for($i= 0; $i < 31; $i++) : ?>
                            <tr>
                                <td><?= date("d.m.y", strtotime("+" . $i . "days")) ?></td>
                                <?php foreach ($printer as $value) : ?>
                                    <td class="<?= $value->id ?>_<?= strtotime("+" . $i . "days", $start) ?>"></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
<?php include '../resources/views/layout/button.php'; ?>



