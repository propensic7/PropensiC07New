<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TransaksiPenjualanHarian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-penjualan-harian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Transaksi')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Kasir')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Timestamp_Penjualan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
