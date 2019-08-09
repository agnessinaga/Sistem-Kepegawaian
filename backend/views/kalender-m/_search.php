<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\KalenderMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kalender-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kalender_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'judul_kegiatan') ?>

    <?= $form->field($model, 'tanggal_kegiatan') ?>

    <?= $form->field($model, 'waktu_pelaksanaan') ?>

    <?php // echo $form->field($model, 'alamat_kegiatan') ?>

    <?php // echo $form->field($model, 'isi_kegiatan') ?>

    <?php // echo $form->field($model, 'keterangan_kegiatan') ?>

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
