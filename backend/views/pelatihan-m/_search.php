<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PelatihanMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelatihan-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'riwayat_pelatihan_id') ?>

    <?= $form->field($model, 'calon_pegawai_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'nama_pelatihan') ?>

    <?= $form->field($model, 'tanggal_pelaksanaan') ?>

    <?php // echo $form->field($model, 'tanggal_selesai') ?>

    <?php // echo $form->field($model, 'tempat_pelaksanaan') ?>

    <?php // echo $form->field($model, 'keterangan_pelatihan') ?>

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
