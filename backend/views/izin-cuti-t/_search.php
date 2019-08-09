<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinCutiTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izin-cuti-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cuti_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'jenis_cuti') ?>

    <?= $form->field($model, 'tanggal_rencana_cuti') ?>

    <?= $form->field($model, 'tanggal_kembali_cuti') ?>

    <?= $form->field($model, 'alasan') ?>

    <?= $form->field($model, 'sisa_cuti') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

    <?= $form->field($model, 'status_cuti') ?>

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
