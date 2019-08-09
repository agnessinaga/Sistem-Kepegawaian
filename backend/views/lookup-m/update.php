<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LookupM */

$this->title = 'Ubah';
$this->params['breadcrumbs'][] = ['label' => 'Lookup', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lookup_name, 'url' => ['view', 'id' => $model->lookup_name]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="lookup-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
