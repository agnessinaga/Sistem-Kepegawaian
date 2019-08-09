<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HasilKuesionerTertutupT */

$this->title = 'Update Hasil Kuesioner Tertutup T: ' . $model->hasil_kuesioner_tertutup_id;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Kuesioner Tertutup Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hasil_kuesioner_tertutup_id, 'url' => ['view', 'id' => $model->hasil_kuesioner_tertutup_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-kuesioner-tertutup-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
