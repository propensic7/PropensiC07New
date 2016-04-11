<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TransaksiPenjualanHarian */

$this->title = 'Update Transaksi Penjualan Harian: ' . ' ' . $model->Id_Transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Penjualan Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Transaksi, 'url' => ['view', 'id' => $model->Id_Transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksi-penjualan-harian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
