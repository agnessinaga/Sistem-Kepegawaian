<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PegawaiM */

$this->title = 'Create Pegawai M';
$this->params['breadcrumbs'][] = ['label' => 'Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
