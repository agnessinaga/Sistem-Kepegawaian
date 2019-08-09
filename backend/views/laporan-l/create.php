<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporanL */

$this->title = 'Create Laporan L';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Ls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-l-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
