<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfilPerusahaanM */

$this->title = 'Update Profil Perusahaan M: ' . $model->perusahaan_id;
$this->params['breadcrumbs'][] = ['label' => 'Profil Perusahaan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->perusahaan_id, 'url' => ['view', 'id' => $model->perusahaan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil-perusahaan-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
