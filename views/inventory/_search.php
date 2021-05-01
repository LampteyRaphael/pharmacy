<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InventorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'bb_unit') ?>

    <?= $form->field($model, 'strip_unit') ?>

    <?= $form->field($model, 'tcv_unit') ?>

    <?php // echo $form->field($model, 'bb_cost') ?>

    <?php // echo $form->field($model, 'strip_cost') ?>

    <?php // echo $form->field($model, 'tcv_cost') ?>

    <?php // echo $form->field($model, 'bb_price') ?>

    <?php // echo $form->field($model, 'strip_price') ?>

    <?php // echo $form->field($model, 'tcv_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
