<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailTransaksiPenjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-transaksi-penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Trans')->textInput() ?>

    <?= $form->field($model, 'Id_Detail')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Menu')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Jumlah_Barang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
