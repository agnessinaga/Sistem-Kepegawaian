<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PenggajianT */

$this->title = 'Create Penggajian T';
$this->params['breadcrumbs'][] = ['label' => 'Penggajian Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penggajian-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
