<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PrestasiM */

$this->title = 'Update Prestasi M: ' . $model->prestasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Prestasi Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->prestasi_id, 'url' => ['view', 'id' => $model->prestasi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prestasi-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
