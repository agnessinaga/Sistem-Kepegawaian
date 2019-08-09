<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PenggajianT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penggajian-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'tanggal_penggajian')->textInput() ?>

    <?= $form->field($model, 'no_penggajian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yang_mengetahui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yang_menyetujui')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penerimaan')->textInput() ?>

    <?= $form->field($model, 'potongan')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

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
