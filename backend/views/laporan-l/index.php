<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\LaporanLSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Ls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-l-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Laporan L', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'laporan_id',
            'nama_laporan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
