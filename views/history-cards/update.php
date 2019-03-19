<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HistoryCards */

$this->title = Yii::t('app', 'Редактировать карточку под историей: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Карточки под историей'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Редактировать');
?>
<div class="history-cards-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
