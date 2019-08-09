<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KendaraanM */

$this->title = 'Update Kendaraan M: ' . $model->kendaraan_id;
$this->params['breadcrumbs'][] = ['label' => 'Kendaraan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kendaraan_id, 'url' => ['view', 'id' => $model->kendaraan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kendaraan-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
