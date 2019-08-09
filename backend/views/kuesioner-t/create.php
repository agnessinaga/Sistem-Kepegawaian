<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KuesionerT */

$this->title = 'Create Kuesioner T';
$this->params['breadcrumbs'][] = ['label' => 'Kuesioner Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuesioner-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
