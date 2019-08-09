<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\KendaraanMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kendaraan Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kendaraan M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kendaraan_id',
            'pegawai_id',
            'jenis_kendaraan',
            'nama_kendaraan',
            'tahun_kendaraan',
            //'no_kendaraan',
            //'cc_mesin_kendaraan',
            //'keterangan:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
