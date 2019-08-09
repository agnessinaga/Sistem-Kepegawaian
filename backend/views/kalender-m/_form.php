<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KalenderM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kalender-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'judul_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_kegiatan')->textInput() ?>

    <?= $form->field($model, 'waktu_pelaksanaan')->textInput() ?>

    <?= $form->field($model, 'alamat_kegiatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isi_kegiatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan_kegiatan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
