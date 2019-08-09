<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CalonPegawaiMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Calon Pegawai Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-pegawai-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Calon Pegawai M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'calon_pegawai_id',
            'pegawai_id',
            'posisi_pekerjaan',
            'nama_lengkap',
            'nik',
            //'tempat_lahir',
            //'tanggal_lahir',
            //'alamat:ntext',
            //'no_telepon',
            //'email:email',
            //'jenis_kelamin',
            //'agama',
            //'golongan_darah',
            //'kewarganegaraan',
            //'pendidikan',
            //'skill_dan_minat',
            //'pengalaman_kerja',
            //'organisasi',
            //'prestasi',
            //'lampiran',
            //'foto',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
