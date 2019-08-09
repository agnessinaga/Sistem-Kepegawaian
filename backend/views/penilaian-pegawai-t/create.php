<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PenilaianPegawaiT */

$this->title = 'Create Penilaian Pegawai T';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pegawai Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pegawai-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
