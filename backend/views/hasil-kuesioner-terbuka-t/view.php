<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\HasilKuesionerTerbukaT */

$this->title = $model->hasil_kuesioner_terbuka_id;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Kuesioner Terbuka Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hasil-kuesioner-terbuka-t-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->hasil_kuesioner_terbuka_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->hasil_kuesioner_terbuka_id], [
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
            'hasil_kuesioner_terbuka_id',
            'pertanyaan_kuesioner_id',
            'jawaban_kuesioner_terbuka',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'host_name',
        ],
    ]) ?>

</div>
