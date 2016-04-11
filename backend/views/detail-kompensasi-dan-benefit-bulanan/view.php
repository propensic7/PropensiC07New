<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailKompensasiDanBenefitBulanan */

$this->title = $model->Id_KomBen;
$this->params['breadcrumbs'][] = ['label' => 'Detail Kompensasi Dan Benefit Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-kompensasi-dan-benefit-bulanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_KomBen' => $model->Id_KomBen, 'Id_Karyawan' => $model->Id_Karyawan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_KomBen' => $model->Id_KomBen, 'Id_Karyawan' => $model->Id_Karyawan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_KomBen',
            'Id_Karyawan',
            'Keterangan',
            'Jumlah',
        ],
    ]) ?>

</div>
