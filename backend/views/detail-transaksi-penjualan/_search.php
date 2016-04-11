<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailTransaksiPenjualanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-transaksi-penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Trans') ?>

    <?= $form->field($model, 'Id_Detail') ?>

    <?= $form->field($model, 'Menu') ?>

    <?= $form->field($model, 'Jumlah_Barang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
