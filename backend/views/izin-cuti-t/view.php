<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinCutiT */

$this->title = 'Rencana-Cuti_' . $model->tanggal_rencana_cuti;
$this->params['breadcrumbs'][] = ['label' => 'Surat Izin Cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->tanggal_rencana_cuti;
\yii\web\YiiAsset::register($this);
?>
<div class="izin-cuti-t-view">

    <hr style = "border:1px solid;"/>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->cuti_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Batal', Url::to(['cancel-by-pegawai', 'id' => $model->cuti_id]), [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah Anda yakin ingin membatalkan Surat Izin Cuti ' . $model->jenis_cuti . ' Anda?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->cuti_id], [
            'class' => 'btn btn-default',
            'data' => [
                'confirm' => 'Apakah anda yakin ingin menghapus Surat Izin Cuti ' . $model->jenis_cuti . '?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cuti_id',
            'pegawai_id',
            'jenis_cuti',
            'tanggal_rencana_cuti',
            'tanggal_kembali_cuti',
            'alasan:ntext',
            'sisa_cuti',
            [
                'attribute' => 'lampiran',
                'value' => function($model){
                    if (is_null($model->lampiran)) {
                        return '-';
                    }else{
                        return ($model->lampiran);
                    }
                }
            ],
            'status_cuti',
            
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
