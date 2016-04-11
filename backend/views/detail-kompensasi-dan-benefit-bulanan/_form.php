<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailKompensasiDanBenefitBulanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-kompensasi-dan-benefit-bulanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_KomBen')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Id_Karyawan')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'Jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
