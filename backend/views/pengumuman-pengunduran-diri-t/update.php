<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PengunduranDiriT */

$this->title = 'Update Pengunduran Diri T: ' . $model->pengunduran_diri_id;
$this->params['breadcrumbs'][] = ['label' => 'Pengunduran Diri Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pengunduran_diri_id, 'url' => ['view', 'id' => $model->pengunduran_diri_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengunduran-diri-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
