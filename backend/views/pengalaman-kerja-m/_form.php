<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PengalamanKerjaM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengalaman-kerja-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calon_pegawai_id')->textInput() ?>

    <?= $form->field($model, 'nama_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan_pengalaman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_masuk')->textInput() ?>

    <?= $form->field($model, 'tangal_keluar')->textInput() ?>

    <?= $form->field($model, 'lama_bekerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan_berhenti_bekerja')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

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
