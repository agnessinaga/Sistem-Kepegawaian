<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PrestasiMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestasi-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'prestasi_id') ?>

    <?= $form->field($model, 'calon_pegawai_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'nama_prestasi') ?>

    <?= $form->field($model, 'tanggal_diperoleh') ?>

    <?php // echo $form->field($model, 'pemberi_prestasi') ?>

    <?php // echo $form->field($model, 'lokasi_prestasi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
