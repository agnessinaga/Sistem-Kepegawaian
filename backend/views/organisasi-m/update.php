<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrganisasiM */

$this->title = 'Update Organisasi M: ' . $model->organisasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Organisasi Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->organisasi_id, 'url' => ['view', 'id' => $model->organisasi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="organisasi-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
