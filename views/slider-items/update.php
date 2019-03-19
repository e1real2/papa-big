<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SliderItems */

$this->title = Yii::t('app', 'Редактировать элемент слайдера: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Элементы слайдера'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Редактировать');
?>
<div class="slider-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
