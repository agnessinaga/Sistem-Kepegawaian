<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PengalamanKerjaMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengalaman Kerja Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengalaman-kerja-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengalaman Kerja M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pengalaman_id',
            'calon_pegawai_id',
            'nama_perusahaan',
            'bidang_perusahaan',
            'jabatan_pengalaman',
            //'tanggal_masuk',
            //'tangal_keluar',
            //'lama_bekerja',
            //'alasan_berhenti_bekerja:ntext',
            //'lampiran',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
