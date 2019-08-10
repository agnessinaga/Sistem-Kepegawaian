<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CalonPegawaiM */

$this->title = 'Tambah Calon Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Calon Pegawai M', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-pegawai-m-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
