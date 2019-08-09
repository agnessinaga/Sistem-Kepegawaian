<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PresensiT */

$this->title = 'Create Presensi T';
$this->params['breadcrumbs'][] = ['label' => 'Presensi Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presensi-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
