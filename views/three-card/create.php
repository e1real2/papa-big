<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ThreeCard */

$this->title = Yii::t('app', 'Добавить карточку под слайдером');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Карточки под слайдером'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="three-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
