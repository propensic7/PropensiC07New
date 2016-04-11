<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TransaksiPenjualanHarianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-penjualan-harian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Transaksi') ?>

    <?= $form->field($model, 'Kasir') ?>

    <?= $form->field($model, 'Timestamp_Penjualan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
