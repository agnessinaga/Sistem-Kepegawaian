<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratPeringatanT */

$this->title = 'Update Surat Peringatan T: ' . $model->surat_peringatan_id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Peringatan Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->surat_peringatan_id, 'url' => ['view', 'id' => $model->surat_peringatan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-peringatan-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
