<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PenugasanM */

$this->title = 'Create Penugasan M';
$this->params['breadcrumbs'][] = ['label' => 'Penugasan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penugasan-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
