<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PrestasiM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestasi-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calon_pegawai_id')->textInput() ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'nama_prestasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_diperoleh')->textInput() ?>

    <?= $form->field($model, 'pemberi_prestasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_prestasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
