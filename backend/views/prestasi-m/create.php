<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PrestasiM */

$this->title = 'Create Prestasi M';
$this->params['breadcrumbs'][] = ['label' => 'Prestasi Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prestasi-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
