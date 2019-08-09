<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RiwayatKeluargaM */

$this->title = $model->keluarga_id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Keluarga Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-keluarga-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->keluarga_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->keluarga_id], [
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
            'keluarga_id',
            'pegawai_id',
            'nama_lengkap',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'no_telepon',
            'golongan_darah',
            'jenis_kelamin',
            'agama',
            'pekerjaan',
            'status_keluarga',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
