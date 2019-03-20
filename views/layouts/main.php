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
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' =>'favicon.ico']);?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Big Papa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"/>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top main-navbar">
    <a class="navbar-brand" href="<?= Url::to('/'); ?>">
        <?php echo Html::img('@web/img/papa-icon.png', ['class' => 'logo', 'alt' => 'Big Papa']); ?>
        <span id="big-papa-text-nav">Big Papa</span>
    </a>
    <div class="d-flex flex-row order-2 order-lg-3">
        <ul class="navbar-nav flex-row">
            <?php $social_links = SocialLinks::find()->orderBy(['order_num' => SORT_ASC])->all(); ?>
            <?php if ($social_links): ?>
                <?php foreach ($social_links as $link): ?>
                    <li class="nav-item"><a target="_blank" class="nav-link px-2" href="<?= $link->url; ?>">
                            <span class="fa fa-<?= $link->type; ?>"></span></a>
                    </li>
                <?php endforeach; ?>
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
            <li class="nav-item <?= $current_action === 'category' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= Url::to('category') ?>">Каталог</a>
            </li>
            <li class="nav-item <?= $current_action === 'contact' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= Url::to('contact') ?>">Контакты</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content container-fluid">
    <?= $content ?>
</div>
<!--<div class="position-absolute"><img alt="Связатся с нами" src="img/phone.svg" alt="" data-toggle="modal"-->
<!--                                    data-target="#exampleModalCenter"></div>-->

<div class="fixed-bottom">
    <div class="p-2 call-phone float-right">
        <a href="tel:+77789997751">
        <img alt="Связатся с нами" src="img/phone.svg" alt="" data-toggle="modal"
             data-target="#exampleModalCenter">
        </a>
    </div>
</div>
<!--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"-->
<!--     aria-hidden="true">-->
<!--    <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title" id="exampleModalLongTitle">Оставить заявку</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <form>-->
<!--                    <div class="form-group">-->
<!--                        <label for="exampleInputEmail1">Номер телефона</label>-->
<!--                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"-->
<!--                               placeholder="Введите номер телефона">-->
<!---->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="exampleInputEmail1">Имя</label>-->
<!--                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"-->
<!--                               placeholder="Введите ваше имя">-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-warning" style="color: black">Отправить</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background: #ffc107;">


    <div class="footer-copyright text-center py-3">© <?= date('Y'); ?> Copyright:
        <a href="<?= Url::to('index'); ?>">bigppapa.kz</a>
    </div>

</footer>

<?php $this->endBody() ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php $this->endPage() ?>
