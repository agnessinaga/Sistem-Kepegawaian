<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KalenderM */

$this->title = 'Update Kalender M: ' . $model->kalender_id;
$this->params['breadcrumbs'][] = ['label' => 'Kalender Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kalender_id, 'url' => ['view', 'id' => $model->kalender_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kalender-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
