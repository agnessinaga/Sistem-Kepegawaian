<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PengumumanT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengumuman-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'judul_pengumuman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pelaksanaan')->textInput() ?>

    <?= $form->field($model, 'waktu_pelaksanaan')->textInput() ?>

    <?= $form->field($model, 'tempat_pelaksanaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_pengumuman')->textarea(['rows' => 6]) ?>

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
