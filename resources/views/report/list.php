<?php
$title = 'Отчёты';
$menu = 'report'
?>

<?php include '../resources/views/layout/top.php' ?>
<?php include '../resources/views/layout/_menu.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Отчёт по печатным машинам</h2>

                <table class="table table-striped table-condensed table-bordered">
                    <tbody>
                    <?php foreach ($list as $value) : ?>
                    <tr>
                        <th colspan="2" class="text-center"><?= $value->name ?></th>
                        <th class="text-right"><?= $value->sum ?></th>
                    </tr>
                        <?php foreach ($value->items as $item) : ?>
                            <tr>
                                <td><?= $item->start ?></td>
                                <td><?= $item->name ?></td>
                                <td class="text-right"><?= $item->price ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php include '../resources/views/layout/button.php'; ?>