<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PegawaiMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'pengunduran_diri_id') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'nik') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_telepon') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'golongan_darah') ?>

    <?php // echo $form->field($model, 'kewarganegaraan') ?>

    <?php // echo $form->field($model, 'pendidikan') ?>

    <?php // echo $form->field($model, 'status_pernikahan') ?>

    <?php // echo $form->field($model, 'posisi_pekerjaan') ?>

    <?php // echo $form->field($model, 'tanggal_mulai_bekerja') ?>

    <?php // echo $form->field($model, 'npwp') ?>

    <?php // echo $form->field($model, 'tanggal_terdaftar_npwp') ?>

    <?php // echo $form->field($model, 'no_bpjs_kesehatan') ?>

    <?php // echo $form->field($model, 'no_bpjs_ketenagakerjaan') ?>

    <?php // echo $form->field($model, 'pelatihan') ?>

    <?php // echo $form->field($model, 'prestasi') ?>

    <?php // echo $form->field($model, 'status_pegawai') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'host_name') ?>

    <?php // echo $form->field($model, 'aktif')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
