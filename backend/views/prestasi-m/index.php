<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PrestasiMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prestasi Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestasi-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prestasi M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'prestasi_id',
            'calon_pegawai_id',
            'pegawai_id',
            'nama_prestasi',
            'tanggal_diperoleh',
            //'pemberi_prestasi',
            //'lokasi_prestasi:ntext',
            //'keterangan:ntext',
            //'lampiran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
