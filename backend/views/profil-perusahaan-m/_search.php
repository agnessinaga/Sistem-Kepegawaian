<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\ProfilPerusahaanMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profil-perusahaan-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'perusahaan_id') ?>

    <?= $form->field($model, 'tahun_profil_perusahaan') ?>

    <?= $form->field($model, 'nama_perusahaan') ?>

    <?= $form->field($model, 'nama_direktur') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_surat_izin') ?>

    <?php // echo $form->field($model, 'tanggal_surat_izin') ?>

    <?php // echo $form->field($model, 'oleh_surat_izin') ?>

    <?php // echo $form->field($model, 'masa_berlaku_surat_izin') ?>

    <?php // echo $form->field($model, 'tahun_diresmikan') ?>

    <?php // echo $form->field($model, 'motto') ?>

    <?php // echo $form->field($model, 'visi') ?>

    <?php // echo $form->field($model, 'misi') ?>

    <?php // echo $form->field($model, 'logo_perusahaan') ?>

    <?php // echo $form->field($model, 'npwp') ?>

    <?php // echo $form->field($model, 'no_faksimili') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'no_telepon') ?>

    <?php // echo $form->field($model, 'negara') ?>

    <?php // echo $form->field($model, 'perusahaan_pusat') ?>

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
