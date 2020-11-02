<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?php
        use mdm\admin\components\MenuHelper;
        $items = MenuHelper::getAssignedMenu(Yii::$app->user->id);
        // 不加 'data-widget' => 'tree'无法展开，坑
        echo dmstr\widgets\Menu::widget([
            'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
            'items' => $items
        ]);
            // dmstr\widgets\Menu::widget(
            // [
            //     'encodeLabels' => false,
            //     'options' => [
            //         'class' => 'sidebar-menu'
            //     ],
            //     'items' => \mdm\admin\components\MenuHelper::getAssignedMenu(Yii::$app->user->id)
            // ]
                // [
            //     'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
            //     'items' => [
            //         ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
            //         ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
            //         ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
            //         ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
            //         [
            //             'label' => 'Some tools',
            //             'icon' => 'share',
            //             'url' => '#',
            //             'items' => [
            //                 ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
            //                 ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
            //                 [
            //                     'label' => 'Level One',
            //                     'icon' => 'circle-o',
            //                     'url' => '#',
            //                     'items' => [
            //                         ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
            //                         [
            //                             'label' => 'Level Two',
            //                             'icon' => 'circle-o',
            //                             'url' => '#',
            //                             'items' => [
            //                                 ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
            //                                 ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
            //                             ],
            //                         ],
            //                     ],
            //                 ],
            //             ],
            //         ],
            //         [
            //             'label' => '权限控制',
            //             'icon' => 'gears',
            //             'url' => '#',
            //             'items' => [
            //                 ['label' => '管理员', 'icon' => 'file-code-o', 'url' => ['/admin'],],
            //                 ['label' => '后台用户', 'icon' => 'fa-circle-o', 'url' => ['/user'],],
            //                 ['label' => '路由', 'icon' => 'circle-o', 'url' => '/admin/route',],
            //                 ['label' => '权限', 'icon' => 'circle-o', 'url' => '/admin/permission',],
            //                 ['label' => '角色', 'icon' => 'circle-o', 'url' => '/admin/role',],
            //                 ['label' => '分配', 'icon' => 'circle-o', 'url' => '/admin/assignment',],
            //                 ['label' => '菜单', 'icon' => 'circle-o', 'url' => '/admin/menu',],
            //             ],
            //         ],
            //     ],
            // ]
        ?>

    </section>

</aside>
