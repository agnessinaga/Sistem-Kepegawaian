<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KendaraanM */

$this->title = 'Create Kendaraan M';
$this->params['breadcrumbs'][] = ['label' => 'Kendaraan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
