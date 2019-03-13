<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\SocialLinks;

AppAsset::register($this);

$current_action = $this->context->action->id;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <!--    <title>--><? //= Html::encode($this->title) ?><!--</title>-->
    <title>Big Papa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"/>
    <?php $this->head() ?>
</head>
<body >

<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top main-navbar">
    <a class="navbar-brand" href="<?= Url::to('index'); ?>">
        <?php echo Html::img('@web/img/papa-icon.png', ['class' => 'logo', 'alt' => 'Big Papa']); ?>
        <span id="big-papa-text-nav">Big Papa</span>
    </a>
    <div class="d-flex flex-row order-2 order-lg-3">
        <ul class="navbar-nav flex-row">
            <?php $social_links = SocialLinks::find()->all();?>
            <?php if($social_links): ?>
                <?php foreach ($social_links as $link):?>
                    <li class="nav-item"><a class="nav-link px-2" href="<?=$link->url;?>">
                            <span class="fa fa-<?=$link->type;?>"></span></a>
                    </li>
<!--                    <li class="nav-item"><a class="nav-link px-2" href="#">-->
<!--                            <span class="fa fa-twitter"></span></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item"><a class="nav-link px-2" href="#">-->
<!--                            <span class="fa fa-youtube"></span></a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link px-2" href="#"><span class="fa fa-instagram"></span></a>-->
<!--                    </li>-->
                    <?php endforeach;?>
            <?php endif; ?>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse order-3 order-lg-2" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?= $current_action === 'index' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= Url::to('index') ?>">Главная
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item <?= $current_action === 'about' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= Url::to('about') ?>">О Нас</a>
            </li>
            <li class="nav-item <?= $current_action === 'good' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= Url::to('good') ?>">Каталог</a>
            </li>
            <li class="nav-item <?= $current_action === 'contact' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= Url::to('contact') ?>">Контакты</a>
            </li>

            <!--            <li class="nav-item dropdown">-->
            <!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"-->
            <!--                   aria-haspopup="true" aria-expanded="false">-->
            <!--                    Dropdown-->
            <!--                </a>-->
            <!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
            <!--                    <a class="dropdown-item" href="#">Action</a>-->
            <!--                    <a class="dropdown-item" href="#">Another action</a>-->
            <!--                    <div class="dropdown-divider"></div>-->
            <!--                    <a class="dropdown-item" href="#">Something else here</a>-->
            <!--                </div>-->
            <!--            </li>-->
        </ul>
    </div>
</nav>
<div class="content container-fluid">
    <?= $content ?>
</div>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background:#E3A914;">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?= date('Y'); ?> Copyright:
        <a href="<?= Url::to('index'); ?>">bigppapa.kz</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<?php $this->endBody() ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php $this->endPage() ?>
