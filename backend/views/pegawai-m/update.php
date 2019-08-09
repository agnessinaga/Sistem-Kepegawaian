<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PegawaiM */

$this->title = 'Update Pegawai M: ' . $model->pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pegawai_id, 'url' => ['view', 'id' => $model->pegawai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pegawai-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
