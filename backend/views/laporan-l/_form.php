<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporanL */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporan-l-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_laporan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
