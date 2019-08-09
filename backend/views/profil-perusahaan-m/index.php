<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProfilPerusahaanMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profil Perusahaan Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-perusahaan-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profil Perusahaan M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'perusahaan_id',
            'tahun_profil_perusahaan',
            'nama_perusahaan',
            'nama_direktur',
            'alamat:ntext',
            //'no_surat_izin',
            //'tanggal_surat_izin',
            //'oleh_surat_izin',
            //'masa_berlaku_surat_izin',
            //'tahun_diresmikan',
            //'motto:ntext',
            //'visi:ntext',
            //'misi:ntext',
            //'logo_perusahaan',
            //'npwp',
            //'no_faksimili',
            //'website',
            //'email:email',
            //'no_telepon',
            //'negara',
            //'perusahaan_pusat',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
