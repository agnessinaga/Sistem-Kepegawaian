<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PresensiTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Presensi Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presensi-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Presensi T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'presensi_id',
            'pegawai_id',
            'tanggal_presensi',
            'jam_datang',
            'jam_pulang',
            //'jam_keluar',
            //'jam_masuk',
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
