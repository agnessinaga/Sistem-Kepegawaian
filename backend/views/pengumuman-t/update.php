<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PengumumanT */

$this->title = 'Update Pengumuman T: ' . $model->pengumuman_id;
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pengumuman_id, 'url' => ['view', 'id' => $model->pengumuman_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengumuman-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
