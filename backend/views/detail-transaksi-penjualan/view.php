<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailTransaksiPenjualan */

$this->title = $model->Id_Trans;
$this->params['breadcrumbs'][] = ['label' => 'Detail Transaksi Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-transaksi-penjualan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Trans' => $model->Id_Trans, 'Id_Detail' => $model->Id_Detail], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Trans' => $model->Id_Trans, 'Id_Detail' => $model->Id_Detail], [
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
            'Id_Trans',
            'Id_Detail',
            'Menu',
            'Jumlah_Barang',
        ],
    ]) ?>

</div>
