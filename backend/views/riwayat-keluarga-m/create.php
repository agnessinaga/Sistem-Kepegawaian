<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RiwayatKeluargaM */

$this->title = 'Create Riwayat Keluarga M';
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Keluarga Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-keluarga-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
