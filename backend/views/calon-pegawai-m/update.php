<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CalonPegawaiM */

$this->title = 'Ubah';
$this->params['breadcrumbs'][] = ['label' => 'Calon Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->calon_pegawai_id, 'url' => ['view', 'id' => $model->calon_pegawai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calon-pegawai-m-update">

	<hr style = "border:1px solid;"/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
