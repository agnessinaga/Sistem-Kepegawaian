<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LookupM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lookup-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lookup_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lookup_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lookup_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lookup_urutan')->textInput() ?>

    <?= $form->field($model, 'lookup_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lookup_aktif')->checkbox() ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
