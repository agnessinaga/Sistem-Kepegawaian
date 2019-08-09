<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratPeringatanT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-peringatan-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_surat_peringatan')->textInput() ?>

    <?= $form->field($model, 'masa_berlaku')->textInput() ?>

    <?= $form->field($model, 'jenis_surat_peringatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_pelanggaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_surat_peringatan')->textarea(['rows' => 6]) ?>

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
