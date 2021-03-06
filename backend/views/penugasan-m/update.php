<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PenugasanM */

$this->title = 'Update Penugasan M: ' . $model->penugasan_id;
$this->params['breadcrumbs'][] = ['label' => 'Penugasan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->penugasan_id, 'url' => ['view', 'id' => $model->penugasan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penugasan-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
