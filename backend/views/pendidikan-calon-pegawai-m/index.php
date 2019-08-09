<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PendidikanCalonPegawaiMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendidikan Calon Pegawai Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendidikan-calon-pegawai-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendidikan Calon Pegawai M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pendidikan_calon_pegawai_id',
            'calon_pegawai_id',
            'tingkat_pendidikan',
            'nama_sekolah',
            'lokasi:ntext',
            //'jurusan',
            //'tahun_masuk',
            //'tahun_lulus',
            //'no_ijazah',
            //'judul_tugas_akhir:ntext',
            //'ipk',
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
