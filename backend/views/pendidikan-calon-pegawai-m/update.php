<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PendidikanCalonPegawaiM */

$this->title = 'Update Pendidikan Calon Pegawai M: ' . $model->pendidikan_calon_pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikan Calon Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pendidikan_calon_pegawai_id, 'url' => ['view', 'id' => $model->pendidikan_calon_pegawai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendidikan-calon-pegawai-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
