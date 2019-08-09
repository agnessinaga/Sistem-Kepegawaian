<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PenilaianPegawaiTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penilaian Pegawai Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pegawai-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pegawai T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'penilaian_id',
            'pegawai_id',
            'tanggal_penilaian',
            'pemberi_penilaian_1',
            'pemberi_penilaian_2',
            //'skor_penilaian',
            //'kategori_penilaian',
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
