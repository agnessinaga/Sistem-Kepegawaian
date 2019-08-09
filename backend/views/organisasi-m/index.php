<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrganisasiMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organisasi Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organisasi-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Organisasi M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'organisasi_id',
            'calon_pegawai_id',
            'nama_organisasi',
            'jenis_organisasi',
            'tahun_masuk',
            //'jabatan',
            //'keterangan:ntext',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',
            //'aktif:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
