<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PengunduranDiriTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengunduran Diri Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengunduran-diri-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengunduran Diri T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pengunduran_diri_id',
            'pegawai_id',
            'tanggal_pengajuan',
            'alasan:ntext',
            'tanggal_berlaku',
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
