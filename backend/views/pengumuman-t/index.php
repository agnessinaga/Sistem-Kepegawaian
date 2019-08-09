<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PengumumanTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengumuman Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengumuman T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pengumuman_id',
            'pegawai_id',
            'judul_pengumuman',
            'tanggal_pelaksanaan',
            'waktu_pelaksanaan',
            //'tempat_pelaksanaan',
            //'isi_pengumuman:ntext',
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
