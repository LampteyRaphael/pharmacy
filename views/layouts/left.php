<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user1-160x160.jpg" class="img-circle" alt=""/>
            </div>
            <div class="pull-left info">
                <p> <?= strtoupper(Yii::$app->user->identity->username)?></p>

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

<?php $admin= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Inventory', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'Dashboard','icon'=>'users','url'=>['/site/index']],
                        ],
                      ],

                      [
                        'label' => 'Password','icon' => 'key','url' => ['#'],
                        'items' => [
                            // ['label'=>'Requested Items','icon'=>'plus','url'=>['/request/create']],
                            ['label' => 'Reset Password', 'icon' => 'key', 'url' => ['/user-request/reset']],
                        ],
                    ],
                      
                    [
                        'label' => 'Admins',
                         'icon' => 'users', 
                         'url' => ['#'],
                         'items'=>[
                            ['label'=>'Admins','icon'=>'user','url'=>['/user/index']],
                            ['label' =>'Add New Admins', 'icon'=>'circle-o', 'url'=>['/user/create']],
                            ['label'=>'Roles', 'icon'=>'circle-o','url'=>['/role/index']],
                            ['label'=>'Add New Role','icon'=>'circle-o','url'=>['/role/create']],
                            ['label'=>'Auth Assignment', 'icon'=>'circle-o','url'=>['/auth-assignment/index']],
                            ['label'=>'New Assignment','icon'=>'circle-o','url'=>['/auth-assignment/create']],
                            ['label'=>'Auth Child', 'icon'=>'circle-o','url'=>['/auth-item-child/index']],
                            ['label'=>'Add New Auth Child','icon'=>'circle-o','url'=>['/auth-item-child/create']],
                            ['label'=>'Auth Item', 'icon'=>'circle-o','url'=>['/auth-item/index']],
                            ['label'=>'New Auth Item','icon'=>'circle-o','url'=>['/auth-item/create']]
                            ],                    
                    ],



                     [
                      'label' => 'Manufacturer', 'icon' => 'cog', 'url' => ['/'],
                      'items'=>[
                         ['label'=>'M Names','icon'=>'circle-o','url'=>['/manufacturer/index']],
                         ['label'=>'Add New Manu','icon'=>'circle-o','url'=>['/manufacturer/create']],
                     ],
                    ],


                    [
                        'label' => 'Product', 'icon' => 'cog', 'url' => ['/'],
                        'items'=>[
                           ['label'=>'P names','icon'=>'circle-o','url'=>['/product/index']],
                           ['label'=>'P create','icon'=>'circle-o','url'=>['/product/create']],
                       ],
                      ],


                     [
                        'label' => 'Customers', 'icon' => 'cog', 'url' => [''],
                        'items'=>[
                           ['label'=>'Customers','icon'=>'circle-o','url'=>['/customers/index']],
                           ['label'=>'Add Customers ','icon'=>'circle-o','url'=>['/customers/create']],
                       ],
                      ],

                      [
                        'label' => 'Orders', 'icon' => 'cog', 'url' => [''],
                        'items'=>[
                           ['label'=>'oders','icon'=>'circle-o','url'=>['/orders/index']],
                           ['label'=>'orders create','icon'=>'circle-o','url'=>['/orders/create']],
                       ],
                      ],
                      
                    
                    //   ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Inventory',
                        'icon' => 'bank',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Inventory', 'icon' => 'circle-o', 'url' => ['/inventory/index']],
                            ['label' => 'Add New Inventory', 'icon' => 'circle-o', 'url' => ['/inventory/create']],
                            ['label' => 'Status Category', 'icon' => 'circle-o', 'url' => ['/status-category/index']],
                            ['label' => 'Add Status Category', 'icon' => 'upload', 'url' => ['/status-category/create']],
                            ['label' => 'Upload Categories', 'icon' => 'circle-o', 'url' => ['/inventory/importc']],

                        ],
                    ],

                    [
                        'label' => 'payment', 'icon' => 'dashboard', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'Payment','icon'=>'circle-o','url'=>['/payment/index']],
                           ['label'=>'Add New Payment','icon'=>'circle-o','url'=>['/payment/create']],
                       ]
                      ],

                      [
                        'label' => 'PaymentDetails', 'icon' => 'dashboard', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'PaymentDetails','icon'=>'circle-o','url'=>['/payment-details/index']],
                           ['label'=>'Add New PaymentDetails','icon'=>'circle-o','url'=>['/payment-details/create']],
                       ]
                      ],
                      [
                        'label' => 'Brands', 'icon' => 'cog', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'Brands','icon'=>'circle-o','url'=>['/brand/index']],
                           ['label'=>'Add New Brand','icon'=>'circle-o','url'=>['/brand/create']],
                       ]
                      ],

                      [
                        'label' => 'Block', 'icon' => 'bank', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'Block','icon'=>'circle-o','url'=>['/blocks/index']],
                           ['label'=>'Add New Block','icon'=>'circle-o','url'=>['/blocks/create']],
                       ]
                      ],

                      [
                        'label' => 'Categories', 'icon' => 'dashboard', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'category','icon'=>'circle-o','url'=>['/category/index']],
                           ['label'=>'Add New Category','icon'=>'circle-o','url'=>['/category/create']],
                       ]
                      ],
                ],
            ]
        ) ?>


<?php $users= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                     [
                      'label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/'],
                     'items'=>[
                         ['label'=>'Dashboard','icon'=>'circle-o','url'=>['/site/index']],
                      ],
                    ],
                    [
                        'label' => 'Password','icon' => 'key','url' => ['#'],
                        'items' => [
                            // ['label'=>'Requested Items','icon'=>'plus','url'=>['/request/create']],
                            ['label' => 'Reset Password', 'icon' => 'key', 'url' => ['/user-request/reset']],
                        ],
                    ],
                    
                    //   ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Request','icon' => 'cog','url' => ['#'],
                        'items' => [
                            // ['label'=>'Requested Items','icon'=>'plus','url'=>['/request/create']],
                            ['label' => 'Make New Request', 'icon' => 'circle-o', 'url' => ['/user-request/create']],
                        ],
                    ],

                    [
                        'label' => 'Pending', 'icon' => 'cog', 'url' => ['#'],
                       'items'=>[
                           ['label'=>'Pending','icon'=>'circle-o','url'=>['//user-request/pending']],
                        //    ['label'=>'Add New Room','icon'=>'plus','url'=>['/room/create']],
                       ]
                      ],

                      [
                        'label' => 'Approved', 'icon' => 'cog', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'Approved','icon'=>'circle-o','url'=>['//user-request/approved']],
                        //    ['label'=>'Add New Item','icon'=>'plus','url'=>['/item/create']],
                       ]
                      ],
                      [
                        'label' => 'Rejected', 'icon' => 'cog', 'url' => ['/'],
                       'items'=>[
                           ['label'=>'Rejected','icon'=>'circle-o','url'=>['//user-request/rejected']],
                        //    ['label'=>'Add New Brand','icon'=>'plus','url'=>['/brand/create']],
                       ]
                      ],
                ],
            ]
        ) ?>

        <?php
        if(Yii::$app->user->can('admin')){
            echo $admin;
        }elseif(Yii::$app->user->can('user')){
            echo $users;
        }
        ?>

    </section>

</aside>
