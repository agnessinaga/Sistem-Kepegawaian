<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\KuesionerTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kuesioner-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kuesioner_id') ?>

    <?= $form->field($model, 'pegawai_id') ?>

    <?= $form->field($model, 'nama_kuesioner') ?>

    <?= $form->field($model, 'pertanyaan') ?>

    <?= $form->field($model, 'tanggal_pembuatan') ?>

    <?php // echo $form->field($model, 'kategori') ?>

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
