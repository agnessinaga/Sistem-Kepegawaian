<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinTidakHadirT */

$this->title = 'Update Izin Tidak Hadir T: ' . $model->izin_tidak_hadir_id;
$this->params['breadcrumbs'][] = ['label' => 'Izin Tidak Hadir Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->izin_tidak_hadir_id, 'url' => ['view', 'id' => $model->izin_tidak_hadir_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izin-tidak-hadir-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
