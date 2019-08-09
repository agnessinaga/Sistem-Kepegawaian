<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinKeluarT */

$this->title = 'Update Izin Keluar T: ' . $model->izin_keluar_id;
$this->params['breadcrumbs'][] = ['label' => 'Izin Keluar Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->izin_keluar_id, 'url' => ['view', 'id' => $model->izin_keluar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izin-keluar-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
