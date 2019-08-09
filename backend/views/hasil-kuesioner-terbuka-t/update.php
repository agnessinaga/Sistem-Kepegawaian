<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\HasilKuesionerTerbukaT */

$this->title = 'Update Hasil Kuesioner Terbuka T: ' . $model->hasil_kuesioner_terbuka_id;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Kuesioner Terbuka Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hasil_kuesioner_terbuka_id, 'url' => ['view', 'id' => $model->hasil_kuesioner_terbuka_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-kuesioner-terbuka-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
