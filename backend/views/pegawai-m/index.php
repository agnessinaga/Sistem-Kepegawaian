<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PegawaiMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pegawai_id',
            'pengunduran_diri_id',
            'nip',
            'nama_lengkap',
            'nik',
            //'tempat_lahir',
            //'tanggal_lahir',
            //'alamat:ntext',
            //'no_telepon',
            //'jenis_kelamin',
            //'agama',
            //'golongan_darah',
            //'kewarganegaraan',
            //'pendidikan',
            //'status_pernikahan',
            //'posisi_pekerjaan',
            //'tanggal_mulai_bekerja',
            //'npwp',
            //'tanggal_terdaftar_npwp',
            //'no_bpjs_kesehatan',
            //'no_bpjs_ketenagakerjaan',
            //'pelatihan',
            //'prestasi',
            //'status_pegawai',
            //'foto',
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
