<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cheque_date')->textInput() ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
