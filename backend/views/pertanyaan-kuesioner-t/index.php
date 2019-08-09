<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PertanyaanKuesionerTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pertanyaan Kuesioner Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-kuesioner-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pertanyaan Kuesioner T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pertanyaan_kuesioner_id',
            'kuesioner_id',
            'pertanyaan_kuesioner:ntext',
            'pilihan_jawaban',
            'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
