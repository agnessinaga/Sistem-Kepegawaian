<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrganisasiM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organisasi-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calon_pegawai_id')->textInput() ?>

    <?= $form->field($model, 'nama_organisasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_organisasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_masuk')->textInput() ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktif')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
