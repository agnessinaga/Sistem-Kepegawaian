<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HasilKuesionerTerbukaT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hasil-kuesioner-terbuka-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pertanyaan_kuesioner_id')->textInput() ?>

    <?= $form->field($model, 'jawaban_kuesioner_terbuka')->textInput(['maxlength' => true]) ?>

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
