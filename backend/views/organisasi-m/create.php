<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrganisasiM */

$this->title = 'Create Organisasi M';
$this->params['breadcrumbs'][] = ['label' => 'Organisasi Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organisasi-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
