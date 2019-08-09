<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PresensiTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presensi-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'presensi_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'tanggal_presensi') ?>

    <?= $form->field($model, 'jam_datang') ?>

    <?= $form->field($model, 'jam_pulang') ?>

    <?php // echo $form->field($model, 'jam_keluar') ?>

    <?php // echo $form->field($model, 'jam_masuk') ?>

    <?php // echo $form->field($model, 'status') ?>

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
