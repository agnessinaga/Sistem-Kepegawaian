<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PegawaiM */

$this->title = $model->pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pegawai_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pegawai_id], [
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
            'pegawai_id',
            'pengunduran_diri_id',
            'nip',
            'nama_lengkap',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat:ntext',
            'no_telepon',
            'jenis_kelamin',
            'agama',
            'golongan_darah',
            'kewarganegaraan',
            'pendidikan',
            'status_pernikahan',
            'posisi_pekerjaan',
            'tanggal_mulai_bekerja',
            'npwp',
            'tanggal_terdaftar_npwp',
            'no_bpjs_kesehatan',
            'no_bpjs_ketenagakerjaan',
            'pelatihan',
            'prestasi',
            'status_pegawai',
            'foto',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
            'aktif:boolean',
        ],
    ]) ?>

</div>
