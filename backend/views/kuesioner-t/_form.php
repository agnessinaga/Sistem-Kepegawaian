<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KuesionerT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuesioner-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'nama_kuesioner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pembuatan')->textInput() ?>

    <?= $form->field($model, 'kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
