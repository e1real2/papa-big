<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SocialLinks */

$this->title = Yii::t('app', 'Добавить социальную сеть');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Социальные сети'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-links-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
