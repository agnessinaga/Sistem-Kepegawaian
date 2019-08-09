<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SuratPeringatanTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Peringatan Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-peringatan-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Peringatan T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'surat_peringatan_id',
            'pegawai_id',
            'no_surat',
            'tanggal_surat_peringatan',
            'masa_berlaku',
            //'jenis_surat_peringatan',
            //'kategori_pelanggaran',
            //'isi_surat_peringatan:ntext',
            //'keterangan:ntext',
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
