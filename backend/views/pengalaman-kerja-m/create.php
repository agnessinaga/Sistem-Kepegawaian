<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PengalamanKerjaM */

$this->title = 'Create Pengalaman Kerja M';
$this->params['breadcrumbs'][] = ['label' => 'Pengalaman Kerja Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengalaman-kerja-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
