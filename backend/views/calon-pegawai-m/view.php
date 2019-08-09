<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CalonPegawaiM */

$this->title = $model->calon_pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Calon Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="calon-pegawai-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->calon_pegawai_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->calon_pegawai_id], [
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
            'calon_pegawai_id',
            'pegawai_id',
            'posisi_pekerjaan',
            'nama_lengkap',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat:ntext',
            'no_telepon',
            'email:email',
            'jenis_kelamin',
            'agama',
            'golongan_darah',
            'kewarganegaraan',
            'pendidikan',
            'skill_dan_minat',
            'pengalaman_kerja',
            'organisasi',
            'prestasi',
            'lampiran',
            'foto',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
