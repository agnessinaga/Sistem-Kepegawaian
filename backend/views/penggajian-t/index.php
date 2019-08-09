<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PenggajianTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggajian Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penggajian-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penggajian T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'penggajian_id',
            'pegawai_id',
            'tanggal_penggajian',
            'no_penggajian',
            'yang_mengetahui',
            //'yang_menyetujui',
            //'deskripsi',
            //'penerimaan',
            //'potongan',
            //'keterangan:ntext',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'host_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
