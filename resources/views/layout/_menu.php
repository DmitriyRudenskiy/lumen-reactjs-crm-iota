<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <?php if (!empty($menu) && $menu == 'answer_create') : ?>
                    <li class="active"><a>Ответить на заявку</a></li>
                <?php else : ?>
                    <li><a href="#">Создать заказ</a></li>
                <?php endif; ?>

                <?php if (!empty($menu) && $menu == 'answer_create') : ?>
                    <li class="active"><a>Ответить на заявку</a></li>
                <?php else : ?>
                    <li><a href="#">График исполнения</a></li>
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
