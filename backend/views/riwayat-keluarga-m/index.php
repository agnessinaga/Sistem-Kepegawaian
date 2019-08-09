<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\RiwayatKeluargaMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Keluarga Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-keluarga-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Keluarga M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'keluarga_id',
            'pegawai_id',
            'nama_lengkap',
            'nik',
            'tempat_lahir',
            //'tanggal_lahir',
            //'no_telepon',
            //'golongan_darah',
            //'jenis_kelamin',
            //'agama',
            //'pekerjaan',
            //'status_keluarga',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
