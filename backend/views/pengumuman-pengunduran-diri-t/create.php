<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PengunduranDiriT */

$this->title = 'Create Pengunduran Diri T';
$this->params['breadcrumbs'][] = ['label' => 'Pengunduran Diri Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengunduran-diri-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
