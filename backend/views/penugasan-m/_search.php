<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PenugasanMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penugasan-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'penugasan_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'pemberi_tugas') ?>

    <?= $form->field($model, 'tanggal_diberikan_tugas') ?>

    <?= $form->field($model, 'tanggal_selesai_tugas') ?>

    <?php // echo $form->field($model, 'lokasi_penugasan') ?>

    <?php // echo $form->field($model, 'isi_penugasan') ?>

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
