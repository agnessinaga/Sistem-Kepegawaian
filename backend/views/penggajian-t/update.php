<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PenggajianT */

$this->title = 'Update Penggajian T: ' . $model->penggajian_id;
$this->params['breadcrumbs'][] = ['label' => 'Penggajian Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->penggajian_id, 'url' => ['view', 'id' => $model->penggajian_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penggajian-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
