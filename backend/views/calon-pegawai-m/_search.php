<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\CalonPegawaiMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calon-pegawai-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'calon_pegawai_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'posisi_pekerjaan') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'nik') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_telepon') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'golongan_darah') ?>

    <?php // echo $form->field($model, 'kewarganegaraan') ?>

    <?php // echo $form->field($model, 'pendidikan') ?>

    <?php // echo $form->field($model, 'skill_dan_minat') ?>

    <?php // echo $form->field($model, 'pengalaman_kerja') ?>

    <?php // echo $form->field($model, 'organisasi') ?>

    <?php // echo $form->field($model, 'prestasi') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'host_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
