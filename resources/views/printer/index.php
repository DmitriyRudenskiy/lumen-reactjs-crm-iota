<?php
$title = 'Отчёты';
$menu = 'report'
?>

<?php include '../resources/views/layout/top.php' ?>
<?php include '../resources/views/layout/_menu.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Отчёты</h2>
                <table class="table table-striped table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Тип</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($list as $value) : ?>
                        <tr>
                            <td><?= $value->id ?></td>
                            <td><?= $value->name ?></td>
                            <td><?= $value->type ?></td>
                            <td class="text-right"><a href="<?= route('user_view', ['id' => $value->id]) ?>" class="btn btn-link"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
            </div>
        </div>
    </div>


<?php include '../resources/views/layout/button.php'; ?>