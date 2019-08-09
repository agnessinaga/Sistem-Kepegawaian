<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PendidikanCalonPegawaiM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendidikan-calon-pegawai-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calon_pegawai_id')->textInput() ?>

    <?= $form->field($model, 'tingkat_pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_masuk')->textInput() ?>

    <?= $form->field($model, 'tahun_lulus')->textInput() ?>

    <?= $form->field($model, 'no_ijazah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_tugas_akhir')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ipk')->textInput() ?>

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
