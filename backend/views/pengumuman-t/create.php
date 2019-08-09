<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PengumumanT */

$this->title = 'Create Pengumuman T';
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
