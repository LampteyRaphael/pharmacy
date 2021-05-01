<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'bb_unit')->textInput() ?>

    <?= $form->field($model, 'strip_unit')->textInput() ?>

    <?= $form->field($model, 'tcv_unit')->textInput() ?>

    <?= $form->field($model, 'bb_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'strip_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tcv_cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'strip_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tcv_price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
