<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PelatihanM */

$this->title = 'Create Pelatihan M';
$this->params['breadcrumbs'][] = ['label' => 'Pelatihan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelatihan-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
