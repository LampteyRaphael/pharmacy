<?php

use app\models\ActiveStatus;
use app\models\Blocks;
use app\models\Role;
use app\models\Room;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="table-responsive">
<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
       <div class="col-md-6">
           <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
       </div>
       <div class="col-md-6">
          <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
       </div>
     
       <div class="col-md-6">
             <?= 
                $form->field($model, 'role_id')->widget(Select2::classname(), [
                 'data' => ArrayHelper::map(Role::find()->all(),'id','name'),
                 'language' => 'de',
                 'options' => ['placeholder' => 'Select a state ...'],
                 'pluginOptions' => [
                     'allowClear' => true
                 ],
             ]); 
             ?>
       </div>
       <div class="col-md-6">
          <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
       </div>
       <div class="col-md-6">
             <?= 
                $form->field($model, 'is_active')->widget(Select2::classname(), [
                 'data' => ArrayHelper::map(ActiveStatus::find()->all(),'id','name'),
                 'language' => 'de',
                 'options' => ['placeholder' => 'Select a state ...'],
                 'pluginOptions' => [
                     'allowClear' => true
                 ],
             ]); 
             ?>
       </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success float-right']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
