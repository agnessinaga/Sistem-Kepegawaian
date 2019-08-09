<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KuesionerT */

$this->title = 'Update Kuesioner T: ' . $model->kuesioner_id;
$this->params['breadcrumbs'][] = ['label' => 'Kuesioner Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kuesioner_id, 'url' => ['view', 'id' => $model->kuesioner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kuesioner-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
