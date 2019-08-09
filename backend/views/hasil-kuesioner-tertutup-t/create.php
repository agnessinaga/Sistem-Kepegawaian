<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HasilKuesionerTertutupT */

$this->title = 'Create Hasil Kuesioner Tertutup T';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Kuesioner Tertutup Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-kuesioner-tertutup-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
