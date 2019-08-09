<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PendidikanCalonPegawaiM */

$this->title = $model->pendidikan_calon_pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikan Calon Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pendidikan-calon-pegawai-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pendidikan_calon_pegawai_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pendidikan_calon_pegawai_id], [
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
            'pendidikan_calon_pegawai_id',
            'calon_pegawai_id',
            'tingkat_pendidikan',
            'nama_sekolah',
            'lokasi:ntext',
            'jurusan',
            'tahun_masuk',
            'tahun_lulus',
            'no_ijazah',
            'judul_tugas_akhir:ntext',
            'ipk',
            'lampiran',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
