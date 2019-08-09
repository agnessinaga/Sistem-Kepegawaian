<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\IzinKeluarTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izin-keluar-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'izin_keluar_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'tanggal_rencana_keluar') ?>

    <?= $form->field($model, 'jam_izin_keluar') ?>

    <?= $form->field($model, 'tanggal_rencana_kembali') ?>

    <?php // echo $form->field($model, 'jam_kembali') ?>

    <?php // echo $form->field($model, 'alasan') ?>

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
