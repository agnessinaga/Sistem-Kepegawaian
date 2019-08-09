<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CalonPegawaiM */

$this->title = 'Create Calon Pegawai M';
$this->params['breadcrumbs'][] = ['label' => 'Calon Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-pegawai-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
