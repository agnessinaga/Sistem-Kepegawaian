<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CalonPegawaiM */

$this->title = 'Update Calon Pegawai M: ' . $model->calon_pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Calon Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->calon_pegawai_id, 'url' => ['view', 'id' => $model->calon_pegawai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calon-pegawai-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
