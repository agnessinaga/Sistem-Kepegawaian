<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PengalamanKerjaM */

$this->title = $model->pengalaman_id;
$this->params['breadcrumbs'][] = ['label' => 'Pengalaman Kerja Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengalaman-kerja-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pengalaman_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pengalaman_id], [
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
            'pengalaman_id',
            'calon_pegawai_id',
            'nama_perusahaan',
            'bidang_perusahaan',
            'jabatan_pengalaman',
            'tanggal_masuk',
            'tangal_keluar',
            'lama_bekerja',
            'alasan_berhenti_bekerja:ntext',
            'lampiran',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
