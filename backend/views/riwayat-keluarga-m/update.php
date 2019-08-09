<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RiwayatKeluargaM */

$this->title = 'Update Riwayat Keluarga M: ' . $model->keluarga_id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Keluarga Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->keluarga_id, 'url' => ['view', 'id' => $model->keluarga_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-keluarga-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
