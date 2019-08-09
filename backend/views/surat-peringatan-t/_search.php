<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\SuratPeringatanTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-peringatan-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'surat_peringatan_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'tanggal_surat_peringatan') ?>

    <?= $form->field($model, 'masa_berlaku') ?>

    <?php // echo $form->field($model, 'jenis_surat_peringatan') ?>

    <?php // echo $form->field($model, 'kategori_pelanggaran') ?>

    <?php // echo $form->field($model, 'isi_surat_peringatan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

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
