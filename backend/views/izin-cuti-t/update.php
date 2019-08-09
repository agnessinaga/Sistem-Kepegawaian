<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinCutiT */

$this->title = 'Ubah Surat Izin Cuti ' . $model->jenis_cuti;
$this->params['breadcrumbs'][] = ['label' => 'Surat Izin Cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal_rencana_cuti, 'url' => ['view', 'id' => $model->cuti_id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="izin-cuti-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
