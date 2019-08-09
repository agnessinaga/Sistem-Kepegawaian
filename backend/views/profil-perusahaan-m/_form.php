<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfilPerusahaanM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profil-perusahaan-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun_profil_perusahaan')->textInput() ?>

    <?= $form->field($model, 'nama_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_direktur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_surat_izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_surat_izin')->textInput() ?>

    <?= $form->field($model, 'oleh_surat_izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masa_berlaku_surat_izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_diresmikan')->textInput() ?>

    <?= $form->field($model, 'motto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'visi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'misi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'logo_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npwp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_faksimili')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telepon')->textInput() ?>

    <?= $form->field($model, 'negara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perusahaan_pusat')->textInput(['maxlength' => true]) ?>

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
