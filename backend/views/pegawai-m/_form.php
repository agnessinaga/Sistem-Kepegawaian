<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PegawaiM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pengunduran_diri_id')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_telepon')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kewarganegaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pernikahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posisi_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_mulai_bekerja')->textInput() ?>

    <?= $form->field($model, 'npwp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_terdaftar_npwp')->textInput() ?>

    <?= $form->field($model, 'no_bpjs_kesehatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bpjs_ketenagakerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelatihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prestasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktif')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
