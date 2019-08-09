<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\LookupM */

$this->title = $model->lookup_name;
$this->params['breadcrumbs'][] = ['label' => 'Lookup', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lookup-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->lookup_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->lookup_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin ingin menghapus Lookup ' . $model->lookup_name .'?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'lookup_id',
            'lookup_type',
            'lookup_name',
            'lookup_value',
            'lookup_urutan',
            'lookup_kode',
            'lookup_aktif:boolean',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
