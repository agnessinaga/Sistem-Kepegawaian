<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\IzinKeluarTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izin Keluar Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-keluar-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Izin Keluar T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'izin_keluar_id',
            'pegawai_id',
            'tanggal_rencana_keluar',
            'jam_izin_keluar',
            'tanggal_rencana_kembali',
            //'jam_kembali',
            //'alasan:ntext',
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
