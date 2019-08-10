<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveRecord;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IzinCutiTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Izin Cuti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-cuti-t-index">
    <hr style = "border:1px solid;"/>

    <p>
        <?= Html::a('Buat Surat Izin Cuti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <h5></h5>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cuti_id',

            [
                'attribute' => 'pegawai_id',
                'label' => 'Nama Pegawai',
                'value' => 'pegawai.nama_pegawai',
            ],

            [
                'attribute' => 'jenis_cuti',
                // 'format' => 'row',
                'headerOptions' => ['style' => 'width:100px'],
                'filter' => array("Tahunan"=>"Tahunan",
                                "Sakit"=>"Sakit",
                                "Besar"=>"Besar",
                                "Bersama"=>"Bersama",
                                "Hamil ddan Melahirkan"=>"Hamil ddan Melahirkan",
                                "Penting"=>"Penting"),
                'filterInputOptions' => ['class' => 'form-control', '   id' => null, 'prompt' => 'Semua'],
                'value' => function($model){
                    if($model->jenis_cuti == "Tahunan"){
                        return 'Tahunan';
                    }
                    elseif($model->jenis_cuti == "Sakit"){
                        return 'Sakit';
                    }
                    elseif($model->jenis_cuti == "Besar"){
                        return 'Besar';
                    }
                    elseif($model->jenis_cuti == "Bersama"){
                        return 'Bersama';
                    }
                    elseif($model->jenis_cuti == "Hamil ddan Melahirkan"){
                        return 'Hamil ddan Melahirkan';
                    }
                    elseif($model->jenis_cuti == "Penting"){
                        return 'Penting';
                    }
                },
            ],
            
            [
                'attribute' => 'tanggal_rencana_cuti',
                'value' => 'tanggal_rencana_cuti',
                'format' => 'raw',
                'filter'=>DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'tanggal_rencana_cuti',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                        // 'todayBtn' => true
                    ]
                ])
            ],

            [
                'attribute' => 'tanggal_kembali_cuti',
                'value' => 'tanggal_kembali_cuti',
                'format' => 'raw',
                'filter'=>DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'tanggal_kembali_cuti',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                        // 'todayBtn' => true
                    ]
                ])
            ],

            ['attribute' => 'lampiran',
                'format' => 'raw'],

            ['attribute' => 'sisa_cuti',
                'format' => 'raw'],

            //'lampiran',

            'status_cuti',

            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
