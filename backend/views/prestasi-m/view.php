<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PrestasiM */

$this->title = $model->prestasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Prestasi Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="prestasi-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->prestasi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->prestasi_id], [
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
            'prestasi_id',
            'calon_pegawai_id',
            'pegawai_id',
            'nama_prestasi',
            'tanggal_diperoleh',
            'pemberi_prestasi',
            'lokasi_prestasi:ntext',
            'keterangan:ntext',
            'lampiran',
        ],
    ]) ?>

</div>
