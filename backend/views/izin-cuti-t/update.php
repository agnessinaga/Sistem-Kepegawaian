<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinCutiT */

$this->title = 'Ubah Surat Izin Cuti';
$this->params['breadcrumbs'][] = ['label' => 'Surat Izin Cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanggal_rencana_cuti, 'url' => ['view', 'id' => $model->cuti_id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="izin-cuti-t-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
