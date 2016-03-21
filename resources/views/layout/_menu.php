<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <?php if (!empty($menu) && $menu == 'order_create') : ?>
                    <li class="active"><a>Создать заказ</a></li>
                <?php else : ?>
                    <li><a href="<?= route('order_create') ?>">Создать заказ</a></li>
                <?php endif; ?>

                <?php if (!empty($menu) && $menu == 'order_list') : ?>
                    <li class="active"><a>График исполнения</a></li>
                <?php else : ?>
                    <li><a href="<?= route('order_list') ?>">График исполнения</a></li>
                <?php endif; ?>

                <?php if (!empty($menu) && $menu == 'task_list') : ?>
                    <li class="active"><a>График загрузки</a></li>
                <?php else : ?>
                    <li><a href="<?= route('task_list') ?>">График загрузки</a></li>
                <?php endif; ?>

                <?php if (!empty($menu) && $menu == 'user') : ?>
                    <li class="active"><a>Пользователи</a></li>
                <?php else : ?>
                    <li><a href="<?= route('user_list') ?>">Пользователи</a></li>
                <?php endif; ?>

                <?php if (!empty($menu) && $menu == 'customer') : ?>
                    <li class="active"><a>Заказчики</a></li>
                <?php else : ?>
                    <li><a href="<?= route('customer_list') ?>">Заказчики</a></li>
                <?php endif; ?>

                <?php if (!empty($menu) && $menu == 'printer') : ?>
                    <li class="active"><a>Исполнители</a></li>
                <?php else : ?>
                    <li><a href="<?= route('printer_list') ?>">Исполнители</a></li>
                <?php endif; ?>

                <?php if (!empty($menu) && $menu == 'report') : ?>
                    <li class="active"><a>Отчёты</a></li>
                <?php else : ?>
                    <li><a href="<?= route('report_index') ?>">Отчёты</a></li>
                <?php endif; ?>

                <li><a href="<?= route('user_logout') ?>">Выход</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">CRM</h3>
    </div>
</div>
