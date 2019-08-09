<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LookupM */

$this->title = 'Tambah Lookup';
$this->params['breadcrumbs'][] = ['label' => 'Lookup', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lookup-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
