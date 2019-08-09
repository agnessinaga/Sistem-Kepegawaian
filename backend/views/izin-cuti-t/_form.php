<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use backend\models\LookupM;
use backend\models\PegawaiM;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinCutiT */
/* @var $form yii\widgets\ActiveForm */

$pegawai = PegawaiM::find()->where(['pegawai_id' => Yii::$app->user->identity->id])->one();

?>
<div class="izin-cuti-t-form">

<div class = "row">
    <div class = "col-md-8">
        <hr style = "border:1px solid;"/>
    </div>
</div>

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'cuti_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'pegawai_id')->hiddenInput()->label(false) ?>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'jenis_cuti')->label('Jenis Cuti')->dropDownList(
                ArrayHelper::map(LookupM::find()->where(['lookup_type'=>'JenisCuti'])->all(),'lookup_name','lookup_name'),
                ['prompt'=>'--Pilih--']
                )
            ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'sisa_cuti')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'tanggal_rencana_cuti')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                    'inline' => false,
                    // modify template for custom rendering
                    //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-MM-yyyy'
                    ]
                ]
            ) ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'tanggal_kembali_cuti')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                    'inline' => false,
                    // modify template for custom rendering
                    //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-MM-yyyy'
                    ]
                ]
            ) ?>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-8">
            <?= $form->field($model, 'alasan')->textarea(['rows' => 4]) ?>
        </div>

        <div class = "col-md-8">
            <?= $form->field($model, 'lampiran')->widget(FileInput::className(), [
                    'options' => ['accept' => 'file/*',],
                    'pluginOptions' => ['allowedFileExtensions' => ['doc', 'docx', 'pdf', 'jpg', 'jpeg', 'png']],
            ]) ?>
        </div>
    </div>


    <?= $form->field($model, 'status_cuti')->hiddenInput(['value' => "Menunggu"])->label(false) ?> 

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host_name')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Batal', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
