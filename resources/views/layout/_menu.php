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
            </ul>
        </nav>
        <h3 class="text-muted">CRM</h3>
    </div>
</div>
