<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratPeringatanT */

$this->title = $model->surat_peringatan_id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Peringatan Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-peringatan-t-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->surat_peringatan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->surat_peringatan_id], [
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
            'surat_peringatan_id',
            'pegawai_id',
            'no_surat',
            'tanggal_surat_peringatan',
            'masa_berlaku',
            'jenis_surat_peringatan',
            'kategori_pelanggaran',
            'isi_surat_peringatan:ntext',
            'keterangan:ntext',
            'lampiran',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
