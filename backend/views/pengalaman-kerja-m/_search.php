<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PengalamanKerjaMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengalaman-kerja-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pengalaman_id') ?>

    <?= $form->field($model, 'calon_pegawai_id') ?>

    <?= $form->field($model, 'nama_perusahaan') ?>

    <?= $form->field($model, 'bidang_perusahaan') ?>

    <?= $form->field($model, 'jabatan_pengalaman') ?>

    <?php // echo $form->field($model, 'tanggal_masuk') ?>

    <?php // echo $form->field($model, 'tangal_keluar') ?>

    <?php // echo $form->field($model, 'lama_bekerja') ?>

    <?php // echo $form->field($model, 'alasan_berhenti_bekerja') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

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
