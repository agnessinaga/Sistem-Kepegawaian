<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinKeluarT */

$this->title = 'Create Izin Keluar T';
$this->params['breadcrumbs'][] = ['label' => 'Izin Keluar Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-keluar-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
