<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\LookupMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lookup-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'lookup_id') ?>

    <?= $form->field($model, 'lookup_type') ?>

    <?= $form->field($model, 'lookup_name') ?>

    <?= $form->field($model, 'lookup_value') ?>

    <?= $form->field($model, 'lookup_urutan') ?>

    <?php // echo $form->field($model, 'lookup_kode') ?>

    <?php // echo $form->field($model, 'lookup_aktif')->checkbox() ?>

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
