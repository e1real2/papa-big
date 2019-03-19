<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ThreeCard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="three-card-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
