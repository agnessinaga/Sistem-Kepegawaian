<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PenilaianPegawaiT */

$this->title = 'Update Penilaian Pegawai T: ' . $model->penilaian_id;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pegawai Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->penilaian_id, 'url' => ['view', 'id' => $model->penilaian_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-pegawai-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
