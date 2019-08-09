<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HasilKuesionerTertutupTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hasil Kuesioner Tertutup Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-kuesioner-tertutup-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Kuesioner Tertutup T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hasil_kuesioner_tertutup_id',
            'pertanyaan_kuesioner_id',
            'jawaban_kuesioner_tertutup',
            'created_at',
            'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
