<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailTransaksiPenjualan */

$this->title = 'Update Detail Transaksi Penjualan: ' . ' ' . $model->Id_Trans;
$this->params['breadcrumbs'][] = ['label' => 'Detail Transaksi Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Trans, 'url' => ['view', 'Id_Trans' => $model->Id_Trans, 'Id_Detail' => $model->Id_Detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-transaksi-penjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
