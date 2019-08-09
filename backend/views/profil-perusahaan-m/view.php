<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfilPerusahaanM */

$this->title = $model->perusahaan_id;
$this->params['breadcrumbs'][] = ['label' => 'Profil Perusahaan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="profil-perusahaan-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->perusahaan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->perusahaan_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'perusahaan_id',
            'tahun_profil_perusahaan',
            'nama_perusahaan',
            'nama_direktur',
            'alamat:ntext',
            'no_surat_izin',
            'tanggal_surat_izin',
            'oleh_surat_izin',
            'masa_berlaku_surat_izin',
            'tahun_diresmikan',
            'motto:ntext',
            'visi:ntext',
            'misi:ntext',
            'logo_perusahaan',
            'npwp',
            'no_faksimili',
            'website',
            'email:email',
            'no_telepon',
            'negara',
            'perusahaan_pusat',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
