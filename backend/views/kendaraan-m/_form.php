<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KendaraanM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'jenis_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_kendaraan')->textInput() ?>

    <?= $form->field($model, 'no_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cc_mesin_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
