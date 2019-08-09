<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\KendaraanMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kendaraan_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'jenis_kendaraan') ?>

    <?= $form->field($model, 'nama_kendaraan') ?>

    <?= $form->field($model, 'tahun_kendaraan') ?>

    <?php // echo $form->field($model, 'no_kendaraan') ?>

    <?php // echo $form->field($model, 'cc_mesin_kendaraan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
