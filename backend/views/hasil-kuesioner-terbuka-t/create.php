<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HasilKuesionerTerbukaT */

$this->title = 'Create Hasil Kuesioner Terbuka T';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Kuesioner Terbuka Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-kuesioner-terbuka-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
