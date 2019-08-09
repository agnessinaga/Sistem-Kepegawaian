<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PengumumanTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengumuman-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pengumuman_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'judul_pengumuman') ?>

    <?= $form->field($model, 'tanggal_pelaksanaan') ?>

    <?= $form->field($model, 'waktu_pelaksanaan') ?>

    <?php // echo $form->field($model, 'tempat_pelaksanaan') ?>

    <?php // echo $form->field($model, 'isi_pengumuman') ?>

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
