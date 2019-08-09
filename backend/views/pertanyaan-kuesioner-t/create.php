<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PertanyaanKuesionerT */

$this->title = 'Create Pertanyaan Kuesioner T';
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaan Kuesioner Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-kuesioner-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
