<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinTidakHadirT */

$this->title = 'Create Izin Tidak Hadir T';
$this->params['breadcrumbs'][] = ['label' => 'Izin Tidak Hadir Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-tidak-hadir-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
