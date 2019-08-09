<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinCutiT */

$this->title = 'Buat Surat Izin Cuti';
$this->params['breadcrumbs'][] = ['label' => 'Surat Izin Cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-cuti-t-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
