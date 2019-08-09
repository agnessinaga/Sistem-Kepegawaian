<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PenilaianPegawaiT */

$this->title = $model->penilaian_id;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pegawai Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-pegawai-t-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->penilaian_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->penilaian_id], [
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
            'penilaian_id',
            'pegawai_id',
            'tanggal_penilaian',
            'pemberi_penilaian_1',
            'pemberi_penilaian_2',
            'skor_penilaian',
            'kategori_penilaian',
            'lampiran',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
