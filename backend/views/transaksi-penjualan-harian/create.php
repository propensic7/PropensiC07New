<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TransaksiPenjualanHarian */

$this->title = 'Create Transaksi Penjualan Harian';
$this->params['breadcrumbs'][] = ['label' => 'Transaksi Penjualan Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-penjualan-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
