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
                        <select class="form-control" name="customer">
                            <option value="">заказчик</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Выбрать</button>
                </form>


                    <table class="table table-striped table-hover" id="work_list" data-list="on">
                        <thead>
                            <th></th>
                            <th>XP</th>
                            <th>Xerox</th>
                        </thead>
                        <tbody>
                        <?php $start = strtotime(date("Y-m-d 00:00:00")) ?>
                        <?php for($i= 0; $i < 31; $i++) : ?>
                            <tr>
                                <td><?= date("d.m.y", strtotime("+" . $i . "days")) ?></td>
                                <td class="1_<?= strtotime("+" . $i . "days", $start) ?>"></td>
                                <td class="2_<?= strtotime("+" . $i . "days", $start) ?>"></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
<?php include '../resources/views/layout/button.php'; ?>



