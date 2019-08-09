<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\IzinTidakHadirTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izin Tidak Hadir Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-tidak-hadir-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Izin Tidak Hadir T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'izin_tidak_hadir_id',
            'pegawai_id',
            'tanggal_rencana_tidak_hadir',
            'tanggal_rencana_kembali',
            'alasan:ntext',
            //'lampiran',
            //'status',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
