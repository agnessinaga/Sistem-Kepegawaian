<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PenugasanM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penugasan-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'pemberi_tugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_diberikan_tugas')->textInput() ?>

    <?= $form->field($model, 'tanggal_selesai_tugas')->textInput() ?>

    <?= $form->field($model, 'lokasi_penugasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isi_penugasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

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
