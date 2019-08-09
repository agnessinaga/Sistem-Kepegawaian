<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\LookupMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lookup Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lookup-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lookup M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lookup_id',
            'lookup_type',
            'lookup_name',
            'lookup_value',
            'lookup_urutan',
            //'lookup_kode',
            //'lookup_aktif:boolean',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
