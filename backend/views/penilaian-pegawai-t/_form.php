<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PenilaianPegawaiT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penilaian-pegawai-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'tanggal_penilaian')->textInput() ?>

    <?= $form->field($model, 'pemberi_penilaian_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemberi_penilaian_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skor_penilaian')->textInput() ?>

    <?= $form->field($model, 'kategori_penilaian')->textInput(['maxlength' => true]) ?>

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
