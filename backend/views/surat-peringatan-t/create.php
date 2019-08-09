<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratPeringatanT */

$this->title = 'Create Surat Peringatan T';
$this->params['breadcrumbs'][] = ['label' => 'Surat Peringatan Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-peringatan-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
