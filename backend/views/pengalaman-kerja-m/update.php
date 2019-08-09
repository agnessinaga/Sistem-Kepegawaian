<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PengalamanKerjaM */

$this->title = 'Update Pengalaman Kerja M: ' . $model->pengalaman_id;
$this->params['breadcrumbs'][] = ['label' => 'Pengalaman Kerja Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pengalaman_id, 'url' => ['view', 'id' => $model->pengalaman_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengalaman-kerja-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
