<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PendidikanCalonPegawaiMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendidikan-calon-pegawai-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pendidikan_calon_pegawai_id') ?>

    <?= $form->field($model, 'calon_pegawai_id') ?>

    <?= $form->field($model, 'tingkat_pendidikan') ?>

    <?= $form->field($model, 'nama_sekolah') ?>

    <?= $form->field($model, 'lokasi') ?>

    <?php // echo $form->field($model, 'jurusan') ?>

    <?php // echo $form->field($model, 'tahun_masuk') ?>

    <?php // echo $form->field($model, 'tahun_lulus') ?>

    <?php // echo $form->field($model, 'no_ijazah') ?>

    <?php // echo $form->field($model, 'judul_tugas_akhir') ?>

    <?php // echo $form->field($model, 'ipk') ?>

    <?php // echo $form->field($model, 'lampiran') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'host_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
