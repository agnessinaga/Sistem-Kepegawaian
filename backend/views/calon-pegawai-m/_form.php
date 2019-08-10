<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use backend\models\LookupM;
use backend\models\PegawaiM;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\CalonPegawaiM */
/* @var $form yii\widgets\ActiveForm */

$pegawai = PegawaiM::find()->where(['pegawai_id' => Yii::$app->user->identity->id])->one();

?>
<div class="calon-pegawai-m-form">

<hr style = "border:1px solid;"/>

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'pegawai_id')->textInput() ?> --> 
    
    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'posisi_pekerjaan')->label('Posisi Pekerjaan')->dropDownList(
                ArrayHelper::map(LookupM::find()->where(['lookup_type'=>'PosisiPekerjaan'])->all(),'lookup_name','lookup_name'),
                        ['prompt'=>'--Pilih--']
                )
            ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'nik')->textInput() ?>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'tanggal_lahir')->widget(
                DatePicker::classname(), [
                    //inline too, not bad
                    'inline' => false,
                    //modify template for custom rendering
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-M-yyyy'
                    ]
                ]); 
            ?>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'no_telepon')->textInput(['maxlength' => 16]) ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>
        </div>

        <div class = "col-md-4">
                <?= $form->field($model, 'jenis_kelamin')->label('Jenis Kelamin')->dropDownList(
                    ArrayHelper::map(LookupM::find()->where(['lookup_type'=>'JenisKelamin'])->all(),'lookup_name','lookup_name'),
                            ['prompt'=>'--Pilih--']
                    )
                ?>
                <div class = "row">
                    <div class = "col-md-12">
                        <?= $form->field($model, 'agama')->label('Agama')->dropDownList(
                            ArrayHelper::map(LookupM::find()->where(['lookup_type'=>'Agama'])->all(),'lookup_name','lookup_name'),
                                    ['prompt'=>'--Pilih--']
                            )
                        ?>
                    </div>
                </div>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'golongan_darah')->label('Golongan Darah')->dropDownList(
                ArrayHelper::map(LookupM::find()->where(['lookup_type'=>'GolonganDarah'])->all(),'lookup_name','lookup_name'),
                    ['prompt'=>'--Pilih--']
                )
            ?>
        </div>

        <div class = "col-md-4">    
            <?= $form->field($model, 'kewarganegaraan')->label('Kewarganegaraan')->dropDownList(
                ArrayHelper::map(LookupM::find()->where(['lookup_type'=>'Kewarganegaraan'])->all(),'lookup_name','lookup_name'),
                    ['prompt'=>'--Pilih--']
                )
            ?>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'pendidikan')->label('Pendidikan')->dropDownList(
                ArrayHelper::map(LookupM::find()->where(['lookup_type'=>'Pendidikan'])->all(),'lookup_name','lookup_name'),
                    ['prompt'=>'--Pilih--']
            )
            ?>
        </div>
        <div class = "col-md-4">
            <?= $form->field($model, 'skill_dan_minat')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'pengalaman_kerja')->textInput(['maxlength' => true]) ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'organisasi')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <p><a class="btn btn-primary" href="http://localhost/sispeg8/backend/web/index.php?r=prestasi-m%2Fcreate">Tambahkan Prestasi</a></p>

    <div class = "row">
        <div class = "col-md-4">
            <?= $form->field($model, 'foto')->widget(FileInput::className(), [
                'options' => ['accept' => 'file/*',],
                'pluginOptions' => ['allowedFileExtensions' => ['doc', 'docx', 'pdf', 'jpg', 'jpeg', 'png']],
            ]) ?>
        </div>

        <div class = "col-md-4">
            <?= $form->field($model, 'cv')->widget(FileInput::className(), [
                    'options' => ['accept' => 'file/*',],
                    'pluginOptions' => ['allowedFileExtensions' => ['doc', 'docx', 'pdf', 'jpg', 'jpeg', 'png']],
            ]) ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>