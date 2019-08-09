<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\KalenderMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kalender Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kalender-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kalender M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kalender_id',
            'pegawai_id',
            'judul_kegiatan',
            'tanggal_kegiatan',
            'waktu_pelaksanaan',
            //'alamat_kegiatan:ntext',
            //'isi_kegiatan:ntext',
            //'keterangan_kegiatan:ntext',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
