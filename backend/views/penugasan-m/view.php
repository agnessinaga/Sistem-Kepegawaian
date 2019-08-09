<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PenugasanM */

$this->title = $model->penugasan_id;
$this->params['breadcrumbs'][] = ['label' => 'Penugasan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penugasan-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->penugasan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->penugasan_id], [
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
            'penugasan_id',
            'pegawai_id',
            'pemberi_tugas',
            'tanggal_diberikan_tugas',
            'tanggal_selesai_tugas',
            'lokasi_penugasan:ntext',
            'isi_penugasan:ntext',
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
