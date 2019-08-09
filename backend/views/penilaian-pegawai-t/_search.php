<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PenilaianPegawaiTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penilaian-pegawai-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'penilaian_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'tanggal_penilaian') ?>

    <?= $form->field($model, 'pemberi_penilaian_1') ?>

    <?= $form->field($model, 'pemberi_penilaian_2') ?>

    <?php // echo $form->field($model, 'skor_penilaian') ?>

    <?php // echo $form->field($model, 'kategori_penilaian') ?>

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
