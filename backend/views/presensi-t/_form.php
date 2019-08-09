<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PresensiT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presensi-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'tanggal_presensi')->textInput() ?>

    <?= $form->field($model, 'jam_datang')->textInput() ?>

    <?= $form->field($model, 'jam_pulang')->textInput() ?>

    <?= $form->field($model, 'jam_keluar')->textInput() ?>

    <?= $form->field($model, 'jam_masuk')->textInput() ?>

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
