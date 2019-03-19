<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Карточки под историей');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-cards-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Добавить карточку под историей'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image',
            'title',
            'url:url',
            'order_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
