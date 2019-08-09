<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PenugasanMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penugasan Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penugasan-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penugasan M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'penugasan_id',
            'pegawai_id',
            'pemberi_tugas',
            'tanggal_diberikan_tugas',
            'tanggal_selesai_tugas',
            //'lokasi_penugasan:ntext',
            //'isi_penugasan:ntext',
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
