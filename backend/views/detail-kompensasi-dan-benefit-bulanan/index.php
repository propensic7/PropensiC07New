<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DetailKompensasiDanBenefitBulananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Kompensasi Dan Benefit Bulanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-kompensasi-dan-benefit-bulanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Kompensasi Dan Benefit Bulanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_KomBen',
            'Id_Karyawan',
            'Keterangan',
            'Jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
