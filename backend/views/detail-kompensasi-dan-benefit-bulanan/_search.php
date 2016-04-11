<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailKompensasiDanBenefitBulananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-kompensasi-dan-benefit-bulanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_KomBen') ?>

    <?= $form->field($model, 'Id_Karyawan') ?>

    <?= $form->field($model, 'Keterangan') ?>

    <?= $form->field($model, 'Jumlah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
