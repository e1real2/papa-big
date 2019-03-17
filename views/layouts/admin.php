<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */
use yii\helpers\Html;
$bundle = yiister\gentelella\assets\Asset::register($this);
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="<?= Yii::$app->charset ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
    <?php $this->beginBody(); ?>
    <div class="container body">

        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Big Papa!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Добро пожаловать,</span>
                            <h2><?=Yii::$app->user->identity->username;?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <?=
                            \yiister\gentelella\widgets\Menu::widget(
                                [
                                    "items" => [
                                        [
                                            "label" => "Главная старница",
                                            "icon" => "home",
                                            "url" => "#",
                                            "items" => [
                                                ["label" => "Социальные сети", "url" => ["social-links/index"]],
                                                ["label" => "Слайдер", "url" => ["slider-items/index"]],
                                                ["label" => "Карточки под слайдером", "url" => ["three-card/index"]],
                                                ["label" => "История", "url" => ["history/index"]],
                                                ["label" => "Карточки под история", "url" => ["history-cards/index"]],
                                            ],
                                        ],
                                        [
                                            "label" => "Страница о нас",
                                            "icon" => "home",
                                            "url" => "#",
                                            "items" => [
                                                ["label" => "главная", "url" => ["social-links/index"]],
                                            ],
                                        ],
                                        [
                                            "label" => "Страница каталог",
                                            "icon" => "table",
                                            "url" => "#",
                                            "items" => [
                                                ["label" => "Категорий", "url" => ["category/index"]],
                                                ["label" => "Работы", "url" => ["social-links/index"]],
                                            ],
                                        ],
                                        [
                                            "label" => "Страница контакты",
                                            "icon" => "home",
                                            "url" => "#",
                                            "items" => [
                                                ["label" => "главная", "url" => ["contact/index"]],
                                            ],
                                        ],
//                                        ["label" => "Layout", "url" => ["site/layout"], "icon" => "files-o"],
//                                        ["label" => "Error page", "url" => ["site/error-page"], "icon" => "close"],
//                                        [
//                                            "label" => "Widgets",
//                                            "icon" => "th",
//                                            "url" => "#",
//                                            "items" => [
//                                                ["label" => "Menu", "url" => ["site/menu"]],
//                                                ["label" => "Panel", "url" => ["site/panel"]],
//                                            ],
//                                        ],
//                                        [
//                                            "label" => "Badges",
//                                            "url" => "#",
//                                            "icon" => "table",
//                                            "items" => [
//                                                [
//                                                    "label" => "Default",
//                                                    "url" => "#",
//                                                    "badge" => "123",
//                                                ],
//                                                [
//                                                    "label" => "Success",
//                                                    "url" => "#",
//                                                    "badge" => "new",
//                                                    "badgeOptions" => ["class" => "label-success"],
//                                                ],
//                                                [
//                                                    "label" => "Danger",
//                                                    "url" => "#",
//                                                    "badge" => "!",
//                                                    "badgeOptions" => ["class" => "label-danger"],
//                                                ],
//                                            ],
//                                        ],
//                                        [
//                                            "label" => "Multilevel",
//                                            "url" => "#",
//                                            "icon" => "table",
//                                            "items" => [
//                                                [
//                                                    "label" => "Second level 1",
//                                                    "url" => "#",
//                                                ],
//                                                [
//                                                    "label" => "Second level 2",
//                                                    "url" => "#",
//                                                    "items" => [
//                                                        [
//                                                            "label" => "Third level 1",
//                                                            "url" => "#",
//                                                        ],
//                                                        [
//                                                            "label" => "Third level 2",
//                                                            "url" => "#",
//                                                        ],
//                                                    ],
//                                                ],
//                                            ],
//                                        ],
                                    ],
                                ]
                            )
                            ?>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                                    <br>
                                </a>
                            </li>


                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <?= $content ?>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
<!--                <div class="pull-right">-->
<!--                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a><br />-->
<!--                    Extension for Yii framework 2 by <a href="http://yiister.ru" rel="nofollow" target="_blank">Yiister</a>-->
<!--                </div>-->
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    <!-- /footer content -->
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>