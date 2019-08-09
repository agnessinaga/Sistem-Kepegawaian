<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KalenderM */

$this->title = 'Create Kalender M';
$this->params['breadcrumbs'][] = ['label' => 'Kalender Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kalender-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
