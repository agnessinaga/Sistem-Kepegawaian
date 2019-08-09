<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PertanyaanKuesionerT */

$this->title = 'Update Pertanyaan Kuesioner T: ' . $model->pertanyaan_kuesioner_id;
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaan Kuesioner Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pertanyaan_kuesioner_id, 'url' => ['view', 'id' => $model->pertanyaan_kuesioner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pertanyaan-kuesioner-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
